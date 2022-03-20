<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test 45</title>
    <script src="https://sdk.inbenta.io/chatbot/1/inbenta-chatbot-sdk.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body bgcolor="#ffffff">
<h1>test inbenta</h1>
<script>
  
  var authorization = {
    domainKey:"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJwcm9qZWN0IjoibGJhcnJvc19jaGF0Ym90X2VuIiwiZG9tYWluX2tleV9pZCI6IkJkcVozaEJGYUV3NnNIelZ3NzhMMlE6OiJ9.mR3EM3nnsXD52ZULbcsd-r-3aEXRGth6Kxwx2ml69G4Z6CibLdYqw5faJEhB-XAbw1ZfSit9BaViEt6jfh0R4g",
    inbentaKey:"Bdm38wV7TCZqRoE/QoieMjitNHJcfodrFsbC8ffvQz0="
  }
  InbentaChatbotSDK.buildWithDomainCredentials(authorization,
    {
      lang:'en',
      answers:{
        answerAttributes: ['ANSWER_TEXT'],
        sideBubbleAttributes: ['SIDEBUBBLE_TEXT'],
        maxRelatedContents: 3,
      },
      proactiveWelcome : true,
      delayOnAnswer: 700,
      usertype: 0,
      environment: "development",
      launcher: {
        title:"Bot Test"
      },
      labels: {
        en: {
          'yes' : 'Sure',
          'no' : 'Nope',
          'generic-error-message' : 'Please try to answer again',
          'enter-question' : 'Ask here',
          'interface-title' : 'Test Inbenta',
          'guest-name' : 'You',
          'help-question' : 'Hello! What can I help you with?',
          'thanks' : 'Thank you!',
          'rate-content' : 'Did it help?',
          'form-message' : 'Please tell us why',
          'submit' : 'Send'
        }
      },
      ratingOptions: [
        {
          id: 1,
          label: 'yes',
          comment: false
        },
        {
          id: 2,
          label: 'no',
          comment: true
        }
      ],
      closeButton:{
        visible:true
      },
      relatedPosition: 'mixed',
      conversationWindow: {
        position: {
          top: null,
          left: null,
          bottom: 15,
          right: 15,
        }
      }
      
    }
  );

  /*
  config.html = {
     'custom-window-header':  '<div class="inbenta-bot__chat__header">'
        +'<div class="header__title">'
        +'Custom Inbenta form'
        +'</div>'
        +'<close-custom-conversation-window/>'
        +'</div>';
  }
  */

</script>
</body>
</html>
