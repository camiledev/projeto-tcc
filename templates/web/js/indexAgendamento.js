function element(element){
  return document.getElementById(element)
}

function limpa_formulário_cep() {
  element('rua').value = ("");
  element('bairro').value = ("");
  element('cidade').value = ("");
  element('uf').value = ("");
}

function meu_callback(conteudo) {
  if (!("erro" in conteudo)) {
    element('rua').value = (conteudo.logradouro);
    element('bairro').value = (conteudo.bairro);
    element('cidade').value = (conteudo.localidade);
    element('uf').value = (conteudo.uf);
  }
  else {
    limpa_formulário_cep();
    alert("CEP não encontrado.");
  }
}

function pesquisacep(valor) {

  const cep = valor.replace(/\D/g, '');

  if (cep != "") {
    const validacep = /^[0-9]{8}$/;

    if (validacep.test(cep)) {
      element('rua').value = "...";
      element('bairro').value = "...";
      element('cidade').value = "...";
      element('uf').value = "...";

      const script = document.createElement('script');

      script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

      document.body.appendChild(script);

    } else {
      limpa_formulário_cep();
      alert("Formato de CEP inválido.");
    }

  } else {
    limpa_formulário_cep();
  }
}

function saveLocal(evt){
  let pedido = {
    "rua": element('rua').value,
    "bairro": element('bairro').value,
    "cidade": element('cidade').value,
    "uf": element('uf').value,
    "cep": element('cep').value,
    "complemento": element('complemento').value,
    "data": element('data').value,
    "horario": element('horario').value,
    "especialidade": element('especialdade').value,
  }
  window.localStorage.pedido = JSON.stringify(pedido)
}