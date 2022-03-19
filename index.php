<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo test new</title>
    <script src="https://sdk.inbenta.io/chatbot/1/inbenta-chatbot-sdk.js"></script>
</head>
<body>
</body>
</html>
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
        title:"Teste de bot"
      },
      labels: {
        en: {
          'yes' : 'Sure',
          'no' : 'Nope',
          'generic-error-message' : 'Please try to answer again',
          'enter-question' : 'Ask here',
          'interface-title' : 'SDK Demo',
          'guest-name' : 'You',
          'help-question' : 'What can I help you with?',
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
      config = {
        closeButton:{
        visible:true
        }
      }      
    }
  );
</script>