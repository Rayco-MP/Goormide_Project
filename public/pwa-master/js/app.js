const container = document.querySelector(".container")
const coffees = [
  { name: "Perspiciatis", image: "images/cafe1.jpg" },
  { name: "Voluptatem", image: "images/cafe1.jpg" },
  { name: "Explicabo", image: "images/cafe1.jpg" },
  { name: "Rchitecto", image: "images/cafe1.jpg" },
  { name: " Beatae", image: "images/cafe1.jpg" },
  { name: " Vitae", image: "images/cafe1.jpg" },
  { name: "Inventore", image: "images/cafe1.jpg" },
  { name: "Veritatis", image: "images/cafe1.jpg" },
  { name: "Accusantium", image: "images/cafe1.jpg" },
]


const showCoffees = () => {
    let output = ""
    coffees.forEach(
      ({ name, image }) =>
        (output += `
              
                `)
    )
    container.innerHTML = output
  }
  
  document.addEventListener("DOMContentLoaded", showCoffees)
  
  if ("serviceWorker" in navigator) {
    window.addEventListener("load", function() {
      navigator.serviceWorker
        .register("./serviceWorker.js")
        .then(res => console.log("service worker registered"))
        .catch(err => console.log("service worker not registered", err))
    })
  }

  window.addEventListener("load", () => {
    function handleNetworkChange(event) {
      if (navigator.onLine) {
        document.getElementById("mensaje").style.display = "none";

      } else {
        document.getElementById("mensaje").style.display = "block";
      }
    }
  
    window.addEventListener("online", handleNetworkChange);
    window.addEventListener("offline", handleNetworkChange);
  });
  

  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let data = JSON.parse(this.responseText).feed.entry;
  
      let i;
      for (i = 0; i < data.length; i++) {
        let name = data[i]["gsx$_cn6ca"]["$t"];
        let age = data[i]["gsx$_cokwr"]["$t"];
        let email = data[i]["gsx$_cpzh4"]["$t"];
  
        document.getElementById("demo").innerHTML +=
          "<tr>" +
          "<td>" +
          name +
          "</td>" +
          "<td>" +
          age +
          "</td>" +
          "<td>" +
          email +
          "</td>" +
          "</tr>";
      }
    }
  };
  
  xmlhttp.open(
    "GET",
    "https://spreadsheets.google.com/feeds/list/1ITMaP-hLCqFDBkH0XL8uk3Wuc7kuczLpSlLf8Y_sqRs/od6/public/values?alt=json",
    true
  );
  xmlhttp.send();