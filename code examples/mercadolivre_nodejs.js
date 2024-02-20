import fetch from 'node-fetch';

const username = 'YOUR_USERNAME';
const password = 'YOUR_PASSWORD';
const body = {
  'source': 'universal_ecommerce',
  'url': 'https://lista.mercadolivre.com.br/eletronicos-audio-video/_loja_mercado-livre#deal_print_id=85ade3d0-cfda-11ee-8f23-2701100dea38&c_id=special-normal&c_element_order=4&c_campaign=eletronicos&c_uid=85ade3d0-cfda-11ee-8f23-2701100dea38',
};
const response = await fetch('https://realtime.oxylabs.io/v1/queries', {
  method: 'post',
  body: JSON.stringify(body),
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Basic ' + Buffer.from(`${username}:${password}`).toString('base64'),
  }
});

console.log(await response.json());