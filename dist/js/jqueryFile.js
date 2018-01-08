 $(document).ready(function(){
    
    $("#tipo").click(function(event){
        $selectedValue = $('#tipo').find(":selected").val();
        if ($selectedValue == "1" || $selectedValue == "" ) {
            $( "#especialidade" ).prop( "disabled", true );
            $( "#numAtendimento" ).prop( "disabled", true );
            $('#idFuncionario').text("Matricula:");
        }else if($selectedValue == "2"){
            $( "#especialidade" ).prop( "disabled", false );
            $( "#numAtendimento" ).prop( "disabled", false );
            $('#idFuncionario').text("CRM:");
        }
    });
    
    $("#clear").click(function(event){
        $("#formCadastro").trigger('reset');
    });
});