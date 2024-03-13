async function fetchData() {
    const response = await fetch("./users.php")
    const data = await response.json()
    console.log(data)
    let result = ""
    data.payload.forEach(element => {
        result += `<li>${element.name}</li>`
    });
    document.querySelector("body").innerHTML = result
}

fetchData()