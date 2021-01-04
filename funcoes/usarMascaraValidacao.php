<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Formatacao de campos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script language="JavaScript" type="text/javascript" src="mascaraValidacao.js"></script> 
    </head>
    <body>
        <form name="form1">
            <br><br>CEP:
            <input type="text" name="cep" onKeyPress="MascaraCep(form1.cep);"
                   maxlength="10" onBlur="ValidaCep(form1.cep)">
            <br><br>DATA:
            <input type="text" name="data" onKeyPress="MascaraData(form1.data);"
                   maxlength="10" onBlur= "ValidaDataform1.data);">
            <br><br>Telefone: 
            <input type="text" name="tel" onKeyPress="MascaraTelefone(form1.tel);" 
                   maxlength="14"  onBlur="ValidaTelefone(form1.tel);">
            <br><br>CPF:
            <input type="text" name="cpf" onBlur="ValidarCPF(form1.cpf);" 
                   onKeyPress="MascaraCPF(form1.cpf);" maxlength="14">
            <br><br>CNPJ:
            <input type="text" name="cnpj" onKeyPress="MascaraCNPJ(form1.cnpj);" 
                   maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);">

            <label for="rg">RG*</label><br />
            <input name="rg" type="text" id="rg" size="30" maxlength="12" onKeyPress="MascaraRG(form1.rg);" />

        </form>
    </body>
</html>