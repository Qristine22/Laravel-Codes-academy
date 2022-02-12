const homeFormInp = document.querySelector(".home__form_inp");

const debounce = (fn, ms) => {
    let timeout;
    return function () {
        const fnCall = () => { fn.apply(this, arguments) }
        clearTimeout(timeout);
        timeout = setTimeout(fnCall, ms)
    };
}






homeFormInp.addEventListener("keyup", (e) => {
    let query = e.target.value;

    if (query) {
        let req = () => {
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

        let f = debounce(req, 1000);
        f();
    }
});