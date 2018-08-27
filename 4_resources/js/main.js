$("#playerCreateBtn").click(function(){
  var playerFirstName = $("input[name=firstName]").val();
  var playerTitle = $("input[name=title]").val();
  var playerGender = $("input[name=sex]:checked").val();
  var playerClass= $( "#playerClass option:selected").val();
  var playerRace = $( "#playerRace option:selected").val();
  var playerDiety = $( "#playerDiety option:selected").val();
  debugger;

});