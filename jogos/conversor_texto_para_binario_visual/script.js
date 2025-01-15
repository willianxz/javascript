document.addEventListener('DOMContentLoaded', () => {
  const textInput = document.getElementById('textInput');
  const convertBtn = document.getElementById('convertBtn');
  const canvas = document.getElementById('binaryCanvas');
  const saveBtn = document.getElementById('saveBtn');
  const imageInput = document.getElementById('imageInput');
  const decodeBtn = document.getElementById('decodeBtn');
  const decodedText = document.getElementById('decodedText');
  const ctx = canvas.getContext('2d');
  
  const SQUARE_SIZE = 10;
  let lastEncodedText = '';

  function textToBinary(text) {
    const encoder = new TextEncoder();
    const uint8Array = encoder.encode(text);
    return Array.from(uint8Array)
      .map(byte => byte.toString(2).padStart(8, '0'))
      .join('');
  }

  function drawBinaryImage(binaryString) {
    const cols = Math.ceil(Math.sqrt(binaryString.length));
    const rows = Math.ceil(binaryString.length / cols);
    
    canvas.width = cols * SQUARE_SIZE;
    canvas.height = rows * SQUARE_SIZE;
    
    ctx.fillStyle = 'white';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    for (let i = 0; i < binaryString.length; i++) {
      const x = (i % cols) * SQUARE_SIZE;
      const y = Math.floor(i / cols) * SQUARE_SIZE;
      
      ctx.fillStyle = binaryString[i] === '1' ? 'black' : 'white';
      ctx.strokeStyle = '#ddd';
      ctx.fillRect(x, y, SQUARE_SIZE, SQUARE_SIZE);
      ctx.strokeRect(x, y, SQUARE_SIZE, SQUARE_SIZE);
    }
  }

  convertBtn.addEventListener('click', () => {
    const text = textInput.value;
    if (text) {
      lastEncodedText = text;
      const binaryString = textToBinary(text);
      drawBinaryImage(binaryString);
      saveBtn.style.display = 'block';
      convertBtn.textContent = 'Converter Novamente';
    }
  });

  saveBtn.addEventListener('click', () => {
    const link = document.createElement('a');
    link.download = 'binary-image.png';
    link.href = canvas.toDataURL();
    link.click();
  });

  function binaryToText(binaryString) {
    // Clean the binary string to ensure only valid binary digits
    const cleanBinary = binaryString.replace(/[^01]/g, '');
    
    // Ensure we have complete bytes (groups of 8 bits)
    const bytes = cleanBinary.match(/.{8}/g) || [];
    
    // Convert binary strings to byte values
    const byteArray = new Uint8Array(
      bytes.map(byte => parseInt(byte, 2))
    );
    
    // Use TextDecoder to properly handle UTF-8 encoded text
    try {
      const decoder = new TextDecoder('utf-8');
      return decoder.decode(byteArray);
    } catch (error) {
      console.error('Error decoding text:', error);
      return '';
    }
  }

  function getPixelBinaryValue(imageData, x, y) {
    const index = (y * imageData.width + x) * 4;
    const r = imageData.data[index];
    const g = imageData.data[index + 1];
    const b = imageData.data[index + 2];
    
    // Using a more precise threshold and considering all color channels
    const brightness = (r + g + b) / 3;
    return brightness < 200 ? '1' : '0';
  }

  function processImage(img) {
    // Create a temporary canvas with the exact dimensions of squares
    const tempCanvas = document.createElement('canvas');
    const tempCtx = tempCanvas.getContext('2d');
    
    const cols = Math.floor(img.width / SQUARE_SIZE);
    const rows = Math.floor(img.height / SQUARE_SIZE);
    
    tempCanvas.width = cols * SQUARE_SIZE;
    tempCanvas.height = rows * SQUARE_SIZE;
    
    // Draw and analyze the image square by square
    tempCtx.drawImage(img, 0, 0);
    
    let binaryString = '';
    
    for (let y = 0; y < rows; y++) {
      for (let x = 0; x < cols; x++) {
        // Sample the center of each square
        const centerX = x * SQUARE_SIZE + Math.floor(SQUARE_SIZE / 2);
        const centerY = y * SQUARE_SIZE + Math.floor(SQUARE_SIZE / 2);
        
        const imageData = tempCtx.getImageData(centerX, centerY, 1, 1);
        binaryString += getPixelBinaryValue(imageData, 0, 0);
      }
    }
    
    return binaryString;
  }

  decodeBtn.addEventListener('click', () => {
    const file = imageInput.files[0];
    if (!file) {
      decodedText.textContent = 'Por favor, selecione uma imagem para decodificar.';
      decodedText.classList.add('error');
      return;
    }

    const img = new Image();
    img.onload = () => {
      try {
        const binaryString = processImage(img);
        const decodedResult = binaryToText(binaryString);
        
        if (!decodedResult) {
          decodedText.textContent = 'Não foi possível decodificar a imagem.';
          decodedText.classList.add('error');
          return;
        }
        
        decodedText.textContent = decodedResult;
        decodedText.classList.remove('error');
        
        if (lastEncodedText && decodedResult === lastEncodedText) {
          decodedText.classList.add('success');
        } else {
          decodedText.classList.remove('success');
        }
      } catch (error) {
        decodedText.textContent = 'Erro ao processar a imagem: ' + error.message;
        decodedText.classList.add('error');
      }
    };
    
    img.onerror = () => {
      decodedText.textContent = 'Erro ao carregar a imagem.';
      decodedText.classList.add('error');
    };
    
    img.src = URL.createObjectURL(file);
  });
});