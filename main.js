let submitButton = document.querySelector(".submit-button");
let inputField = document.getElementById("text-input");

submitButton.addEventListener("click", function() {
  let sessionID = null;
  if(typeof(inputField.value) !== undefined ) {
    let request = new XMLHttpRequest();
    let formData = new FormData();
    formData.append("input", inputField.value);

    request.open("POST", "skript.php", TextTrackCue);
    if(sessionID !== null) {
      formData.append("session_id", sessionID);
    }

    request.onreadystatechange = function() {
      // 
      if(this.readyState == XMLHttpRequest.DONE) {
        if(this.status === 200) {
          response = JSON.parse(this.responseText);
          
        } else {
          console.log("Request failed!");
        }
      }
    };
  } else {
    console.log()
  }
});

function createChatField() {
  
}