
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>jQuery Mask Plugin - A jQuery Plugin to make masks on form fields and html elements.</title>
</head>
<body>
 
       
        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="jquery.mask.min.js"></script>
        <script type="text/javascript" src="aplicarMascara.js"></script>

        
          <div class="col">
            <label>Date</label>
            <input type="text" class="date">
            <label>Hour</label>
            <input type="text" class="time">
            <label>Date &amp; Hour</label>
            <input type="text" class="date_time">
            <label>Zip-Code</label>
            <input type="text" class="cep">
            <label>With Callbacks (open console)</label>
            <input type="text" class="cep_with_callback">
            <label>Crazy Zip-Code</label>
            <input type="text" class="crazy_cep">
            <label>Money</label>
            <input type="text" class="money">
            <label>Mask placeholder option</label>
            <input type="text" class="placeholder" placeholder="__/__/____">
            <label>Masks on div elements!</label>
            <div class="mask-on-div" style="display: block;">123.456.789-09</div> <input type="button" class="bt-mask-it" value="Mask it!">
         </div>
            
            
            
            <div class="col">
                <label>Telephone</label>
                <input type="text" class="phone">
                <label>Telephone with Code Area</label>
                <input type="text" class="phone_with_ddd">
                <label>US Telephone</label>
                <input type="text" class="phone_us">
                <label>São Paulo Celphones</label>
                <input type="text" class="sp_celphones">
                <label>Mixed Type Mask</label>
                <input type="text" class="mixed">
                <label>CPF</label>
                <input type="text" class="cpf">
                <label>CNPJ</label>
                <input type="text" class="cnpj">
                <label>IP Address</label>
                <input type="text" class="ip_address">
                <label>Mask with Clear If Not Match Option</label>
                <input type="text" class="clear-if-not-match">
                <label>Mask with a Fallback Digit</label>
                <input type="text" class="fallback">
                <label>Mask with selectOnFocus</label>
                <input type="text" class="selectonfocus">
         </div>


</body>
</html>
