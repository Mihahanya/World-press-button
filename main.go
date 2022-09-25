package main

import (
	"html/template"
	"net/http"
)

func mainPage(w http.ResponseWriter, r *http.Request) {
	tmpl, _ := template.ParseFiles("templates/index.html")
	tmpl.Execute(w, nil)
}

func handleFunc() {
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("./static/"))))
	http.HandleFunc("/", mainPage)
	http.ListenAndServe(":8080", nil)
}

func main() {
	handleFunc()
}
