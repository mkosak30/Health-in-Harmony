project

package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

// Model structure for Health in Harmony project
type Model struct {
	Health string `json:"health"`
	Harmony string `json:"harmony"`
}

func main() {
	// Get the Health in Harmony data
	resp, err := http.Get("http://api.example.com/health_in_harmony.json")
	if err != nil {
		// handle error
	}
	defer resp.Body.Close()

	// Read the response body and Unmarshal into model
	body, err := ioutil.ReadAll(resp.Body)
	if err != nil {
		// handle error
	}
	var model Model
	err = json.Unmarshal(body, &model)
	if err != nil {
		// handle error
	}

	// Print the model
	fmt.Printf("Health: %s\n", model.Health)
	fmt.Printf("Harmony: %s\n", model.Harmony)
}