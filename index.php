<html>
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="https://sdk.inbenta.io/chatbot/0/inbenta-chatbot-sdk.js"></script>
  <style>
    .inbenta .inbenta-bot__launcher {
        background-color: transparent;
        opacity: 1;
        padding: 2px;
        border-radius: 8px;
        box-shadow: 0 2px 3px 0 rgba(0,0,0,.16),0 3px 12px 0 rgba(0,0,0,.08);
        width: 80px;
        height: 80px;
        transition: all .3s ease 0s
    }
    .inbenta .inbenta-bot__launcher:hover {
        opacity: 0.7;
        background-color: transparent;
        box-shadow: 0 2px 3px 0 rgba(0,0,0,.16),0 3px 12px 0 rgba(0,0,0,.08);
        background-position: 50%;
        padding: 2px;
        border-radius: 8px;
        width: 80px;
        height: 80px;
    }
    .inbenta .inbenta-bot__launcher .inbenta-bot__launcher__image:hover {
        background-image: url(https://www.inbenta.com/wp-content/themes/inbenta/img/icons/virtual-assistant.svg);
        filter: hue-rotate(270deg);
        background-position: 50%;
        transition: all .3s ease 0.3s
        opacity: 1;
        width: 80px;
        height: 80px;
    }
    .inbenta .inbenta-bot__launcher .inbenta-bot__launcher__image { 
        background-image: url(https://www.inbenta.com/wp-content/themes/inbenta/img/icons/virtual-assistant.svg);
        background-position: 50%;
        transition: all .3s ease 0.3s
      filter: opacity(70%);
        opacity: 1;
        width: 80px;
        height: 80px;
    } 
    .inbenta .inbenta-bot__chat__header {
        background-color: #fff;
        color: #E3253A;
        padding-top: 2px;
        padding-bottom: 2px;
    }
    .inbenta .inbenta-bot__chat__header .header__title {
        font-size: 20px!important;
        font-weight: 900!important;
    }
    .inbenta .messages__message__avatar {
      background-color: #fff!important;
    }
    .inbenta .messages__message .messages__message__content .content__buttons button.inbenta-bot-button {
      background-color:#fff;
      border: 3px;
      border-radius: 100px;
      box-shadow: none;
      color: #E3253A;
    }
    .inbenta .messages__message .messages__message__content 
    .content__buttons button.inbenta-bot-button[disabled].clicked {
        box-shadow: inset 0 0 1em gold;
        opacity: .7;
        font-weight: 600;
    }
    .inbenta  button.footer__form__button.inbenta-bot-button {
      color: #E3253A!important;
      background-color:#fff!important;
    }
    .inbenta .inbenta-bot-icon.inbenta-bot-icon--avatar {
        background-image: url(https://www.inbenta.com/wp-content/themes/inbenta/img/icons/virtual-assistant.svg);
        background-position: 50%;
        width: 80px;
        height: 80px;
        background-repeat: no-repeat;
      opacity: 1;
        overflow: hidden;
    }
  </style>
</head>
<body>
</body>
</html>
<script>
  initSDK();
  function initSDK() {
    var inbenta_secret="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJwcm9qZWN0IjoibGJhcnJvc19jaGF0Ym90X2VuIiwic2FsdCI6IkJkbTM4d1dLMHJMb3lRdTBkUzFLTGc9PSJ9.OSBEPSkQK3LDKM-ZdNBJo6u7sN7R8m0Xbc_EMjeqNIs9TZrM_SRJM7lAtzWC5IHT0ADqRmd8mK9GYjB9YqoKmA";
    var inbenta_key="Bdm38wV7TCZqRoE/QoieMjitNHJcfodrFsbC8ffvQz0=";
    var inbenta_token = authPOST(inbenta_key, inbenta_secret, initBot);
    console.log(inbenta_token);
  }

  function initBot(inbenta_token, inbenta_key) {

    var InbentaAuth =  InbentaChatbotSDK.createFromAccessToken(inbenta_token, inbenta_key);
    
    /*
    var InbentaConfiguration = {
        lang:'en',
        "answers":{
          "answerAttributes": ["ANSWER_TEXT"],
          "sideBubbleAttributes": ["SIDEBUBBLE_TEXT"]
        },
        usertype: 0,
        environment: "development",
        launcher: {
          title:""
        },
        labels: {
          en: {
            'yes' : 'Sure',
            'no' : 'Nope',
            'generic-error-message' : "I'm still in training, please try again",
            'enter-question' : 'Ask Me!',
            'interface-title' : 'I.S.A. 000A',
            'guest-name' : 'You',
            'help-question' : "Hello!, I'm Inbenta Support Agent v0.1.0, what can I do for you?",
            'thanks' : 'Thank you!',
            'rate-content' : 'Did I help?',
            'form-message' : 'Please tell me how I can get better',
            'submit' : 'Send'
          }
        }
      }; 

     */
    InbentaChatbotSDK.build(InbentaAuth, InbentaConfiguration);
  }

  function authPOST(inbenta_key, inbenta_secret, callback) {
    var data = {"secret":inbenta_secret}; 
    var xhr = new XMLHttpRequest();
    var inbenta_token = "";

    xhr.open("POST", "https://api.inbenta.io/v1/auth");
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("x-inbenta-key", inbenta_key);

    xhr.onreadystatechange = function() {       //Call a function when the state changes.
    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
        console.log(JSON.parse(xhr.responseText).accessToken);
        inbenta_token = JSON.parse(xhr.responseText).accessToken;
        inbenta_token = JSON.stringify(inbenta_token);
        callback(inbenta_token, inbenta_key);
        return inbenta_token;
    }};
    xhr.send(JSON.stringify(data));

  }
</script>