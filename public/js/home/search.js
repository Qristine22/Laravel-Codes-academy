const homeFormInp = document.querySelector(".home__form_inp");

homeFormInp.addEventListener("input", (e) => {
    let query = e.target.value;

    if(query){
        fetch(`http://justiceacademy.loc/api/search/${query}`,
            {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                method: "POST",
                body: `query=${query}`
            })
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                console.log(data);
            })
            .catch((res) => { console.log("nothing") })
    }
});