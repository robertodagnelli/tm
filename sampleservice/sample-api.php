<?php
  echo "<body>
    <div id='chatborder'>
      <div id=\"chatheader\">Sample Chatbot Microservice</div>
      <p id=\"chatlog7\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog6\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog5\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog4\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog3\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog2\" class=\"chatlog\">&nbsp;</p>
      <p id=\"chatlog1\" class=\"chatlog\">&nbsp;</p>
      <div id=\"chatinput\">
        <input type=\"text\" name=\"chat\" id=\"chatbox\" placeholder=\"Hi there! Type here to talk to me.\" onfocus=\"placeHolder()\">
      </div>
      <div id=\"chatfooter\">&nbsp</div>
    </div>

  <script>

  var messages = [], //array that hold the record of each string in chat
    lastUserMessage = \"\", //keeps track of the most recent input string from the user
    botMessage = \"\", //var keeps track of what the chatbot is going to say
    botName = 'Chatbot', //name of the chatbot
    myName = 'Me'; //name of the user


  //****************************************************************
  //edit this function to change what the chatbot says
  function chatbotResponse() {
    talking = true;
    botMessage = \"I can't answer to this.\"; //the default message

    if (lastUserMessage === 'Hi' || lastUserMessage =='Hello') {
      const hi = ['Good morning, how can I help you?','Hello, how can I help you?']
      botMessage = hi[Math.floor(Math.random()*(hi.length))];;
    }

    if (lastUserMessage === 'How much are the shipping costs?') {
      botMessage = 'The shipping cost is only € 8.90';
    }

    if (lastUserMessage === 'Thank you') {
      botMessage = 'You are welcome';
    }
  }
  //****************************************************************
  //this runs each time enter is pressed.
  //It controls the overall input and output
  function newEntry() {
    //if the message from the user isn't empty then run
    if (document.getElementById(\"chatbox\").value != \"\") {
      //pulls the value from the chatbox ands sets it to lastUserMessage
      lastUserMessage = document.getElementById(\"chatbox\").value;
      //sets the chat box to be clear
      document.getElementById(\"chatbox\").value = \"\";
      //adds the value of the chatbox to the array messages
      messages.push(\"<b>\" + myName + \":</b> \" + lastUserMessage);
      //sets the variable botMessage in response to lastUserMessage
      chatbotResponse();
      //add the chatbot's name and message to the array messages
      messages.push(\"<b>\" + botName + \":</b> \" + botMessage);
      //outputs the last few array elements of messages to html
      for (var i = 1; i < 8; i++) {
        if (messages[messages.length - i])
          document.getElementById(\"chatlog\" + i).innerHTML = messages[messages.length - i];
          //sets the chat visible
          if(messages[messages.length - i] != null){
            document.getElementById(\"chatlog\" + i).style.visibility = \"visible\";
          }
      }
    }
  }


  //runs the keypress() function when a key is pressed
  document.onkeypress = keyPress;
  //if the key pressed is 'enter' runs the function newEntry()
  function keyPress(e) {
    var x = e || window.event;
    var key = (x.keyCode || x.which);
    if (key == 13 || key == 3) {
      //runs this function when enter is pressed
      newEntry();
    }
  }

  //clears the placeholder text ion the chatbox
  //this function is set to run when the users brings focus to the chatbox, by clicking on it
  function placeHolder() {
    document.getElementById(\"chatbox\").placeholder = \"\";
  }
  </script>";

?>
