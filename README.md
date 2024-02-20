# Mercadolivre Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs' [Mercadolivre Scraper](https://oxylabs.io/products/scraper-api/ecommerce/mercadolivre?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Mercadolivre website effortlessly. This brief guide showcases how Mercadolivre Scraper works, along with code examples to help you better understand how to use it hassle-free.

### How it works

You can get Mercadolivre results by providing your own URLs to our service. We can return the HTML for any page you like.

#### Python code example

The example below illustrates how you can get HTML of Mercadolivre page.

```python
import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal_ecommerce',
    'url': 'https://lista.mercadolivre.com.br/eletronicos-audio-video/_loja_mercado-livre#deal_print_id=85ade3d0-cfda-11ee-8f23-2701100dea38&c_id=special-normal&c_element_order=4&c_campaign=eletronicos&c_uid=85ade3d0-cfda-11ee-8f23-2701100dea38'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/mercadolivre-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "\n<!DOCTYPE html>\n<html lang=\"pt-BR\">\n<head><link rel=\"preconnect\" href=\"https://www.google-analytics ... </html>",
      "created_at": "2024-02-20 12:40:15",
      "updated_at": "2024-02-20 12:40:22",
      "page": 1,
      "url": "https://lista.mercadolivre.com.br/eletronicos-audio-video/_loja_mercado-livre#deal_print_id=85ade3d0-cfda-11ee-8f23-2701100dea38&c_id=special-normal&c_element_order=4&c_campaign=eletronicos&c_uid=85ade3d0-cfda-11ee-8f23-2701100dea38",
      "job_id": "7165686591921341441",
      "status_code": 200
    }
  ]
}
```
With our Mercadolivre Scraper, you can seamlessly pull public data from any Mercadolivre web page. Gather the necessary information on popular books, including price, customer reviews, or summaries, for your market research and to maintain a competitive edge. If you need any assistance, reach out to our support team through live chat or send us an email at hello@oxylabs.io.