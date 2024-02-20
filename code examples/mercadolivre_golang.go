package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func main() {
	const Username = "YOUR_USERNAME"
	const Password = "YOUR_PASSWORD"

	payload := map[string]string{
		"source": "universal_ecommerce",
		"url": "https://lista.mercadolivre.com.br/eletronicos-audio-video/_loja_mercado-livre#deal_print_id=85ade3d0-cfda-11ee-8f23-2701100dea38&c_id=special-normal&c_element_order=4&c_campaign=eletronicos&c_uid=85ade3d0-cfda-11ee-8f23-2701100dea38",
	}

	jsonValue, _ := json.Marshal(payload)

	client := &http.Client{}
	request, _ := http.NewRequest("POST",
		"https://realtime.oxylabs.io/v1/queries",
		bytes.NewBuffer(jsonValue),
	)

	request.SetBasicAuth(Username, Password)
	response, _ := client.Do(request)

	responseText, _ := ioutil.ReadAll(response.Body)
	fmt.Println(string(responseText))
}