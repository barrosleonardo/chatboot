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

      var authorization = {
  domainKey:"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJwcm9qZWN0IjoibGJhcnJvc19jaGF0Ym90X2VuIiwiZG9tYWluX2tleV9pZCI6IkJkcVozaEJGYUV3NnNIelZ3NzhMMlE6OiJ9.mR3EM3nnsXD52ZULbcsd-r-3aEXRGth6Kxwx2ml69G4Z6CibLdYqw5faJEhB-XAbw1ZfSit9BaViEt6jfh0R4g",
  inbentaKey:"Bdm38wV7TCZqRoE/QoieMjitNHJcfodrFsbC8ffvQz0="
}

 InbentaChatbotSDK.buildWithDomainCredentials(authorization, InbentaConfiguration);


</script>


