let submitButton = document.querySelector(".submit-button");
let inputField = document.getElementById("text-input");
let chatField = document.querySelector(".chatbot-window");
let sessionID;
let formData;


window.onload = function() {
  let request = new XMLHttpRequest();
  request.open("POST", "session.php", true);
  request.send();
  request.onreadystatechange = function() {
    // 
    if(this.readyState == XMLHttpRequest.DONE) {
      if(this.status === 200) {
       console.log(this.responseText);
        response = JSON.parse(this.responseText);
        sessionID = response.session_id;
        localStorage.setItem("session_id", sessionID)
        console.log(sessionID); 
        // chatField.innerHTML = this.responseText;
      } else {
        console.log("Request failed!");
      }
    }
  };
  request.open("POST", "chatbot.php", true);
  formData = new FormData();
  formData.append("input", "Hallo");
  formData.append("session_id", localStorage.getItem("session_id"));
  request.send(formData);
  request.onreadystatechange = function() {
    // 
    if(this.readyState == XMLHttpRequest.DONE) {
      if(this.status === 200) {
       console.log(this.responseText);
        response = JSON.parse(this.responseText);
        console.log(response);
        // createChatField(response.output.generic[0].text, "answer");
        inputField.value = ""
      } else {
        console.log("Request failed!");
      }
    }
  }
}

submitButton.addEventListener("click", function() {
  if(typeof(inputField.value) !== undefined ) {
    let request = new XMLHttpRequest();
    let formData = new FormData();
    sessionID = localStorage.getItem("session_id");

    formData.append("input", inputField.value);

    formData.append("session_id", sessionID);
    request.open("POST", "chatbot.php", true);
    createChatField(inputField.value, "question");

    request.send(formData);
    request.onreadystatechange = function() {
      // 
      if(this.readyState == XMLHttpRequest.DONE) {
        if(this.status === 200) {
         console.log(this.responseText);
          response = JSON.parse(this.responseText);
          console.log(response);
          if(response.output.generic[0].response_type == "text") {
            createChatField(response.output.generic[0].text, "answer");
          } 
          if(response.output.generic[0].response_type == "suggestion") {
            renderSuggestionField();
            console.log("suggestion detected!")
          }
          inputField.value = ""
        } else {
          console.log("Request failed!");
        }
      }
    };
  } else {
    console.log("sds")
  }
});

function createChatField(input, chatbubbleType) {
  let chatBubble = document.createElement("div");
  if(chatbubbleType === "question") {
    chatBubble.className = "chatbubble-question"
  }
  if(chatbubbleType === "answer") {
    chatBubble.className = "chatbubble-answer"
  }
  chatBubble.innerHTML = input
  chatField.append(chatBubble);
}


function renderSuggestionField(suggestions) {
  let suggestionField = document.createElement("div");
  
}