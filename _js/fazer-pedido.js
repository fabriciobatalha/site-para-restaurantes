function calc_total() {
    var prato = document.getElementById('cprato').value;
    var qtd = parseInt(document.getElementById('cqtd').value);

    if (prato == "A La Carte") {
        tot = qtd * 12;
    }
        else if (prato == "Parmegiana") {
            tot = qtd * 20;
        } 
            else if (prato == "Escondidinho") {
                tot = qtd * 15;
            } 
                else if (prato == "Pizza de Portuguesa") {
                    tot = qtd * 40;
                } 
                    else if (prato == "Pizza de Calabresa") {
                        tot = qtd * 40;
                    } 
                        else if (prato == "Pizza de Mussarela") {
                            tot = qtd * 35;
                        } 
                            else {
                                tot = 0;
                            }
    document.getElementById('ctot').value = tot;
}