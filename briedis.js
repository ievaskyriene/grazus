/** @format */
console.log("aaaa");
const button = document.querySelector("#button");
button.addEventListener("click", () => {
  let answer = 111;
  document.querySelectorAll('[name="gyvunas"]').forEach((radio) => {
    if (radio.checked) {
      answer = radio.value;
    }
  });
  axios
    .post("http://192.168.64.2/grazus/briedis2.php", {
      answer: answer,
    })
    .then(function (response) {
      document.querySelector("#top").innerHTML = response.data.atsakymas;
      console.log(response.data);
    })
    .catch(function (error) {
      console.log(error);
    });
});
