const firebaseConfig = {
    apiKey: "AIzaSyBFSf7FHF5ZQKcFNL5J6_9MyAIGBbj05tU",
    authDomain: "smarthome-a93f9.firebaseapp.com",
    databaseURL: "https://smarthome-a93f9.firebaseio.com",
    projectId: "smarthome-a93f9",
    storageBucket: "smarthome-a93f9.appspot.com",
    messagingSenderId: "1025893724725",
    appId: "1:1025893724725:web:2280bd399d74df8f86777c",
    measurementId: "G-8HVH00WLHL"
  };
    firebase.initializeApp(firebaseConfig);
  
  
  function getdatastatus()
  {
    const dbRefCanhBao=firebase.database().ref().child('PhatHienDotNhap');
    dbRefCanhBao.on('value',snap=>{
      var canhbao=snap.val();
      document.getElementById('canhbao').innerHTML=canhbao;
        });
  }