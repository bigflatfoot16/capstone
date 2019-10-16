<script type="text/javascript">
  function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "OP1"){
      var optionArray = ["","P1","P2","P3"];
    }else if(s1.value == "OP2"){
      var optionArray = ["","P4","P5","P6"];
    }else if(s1.value == "OP3"){
      var optionArray = ["","P7","P8","P9"];
    }

    for (var option in optionArray) {
      var passitem = optionArray[option];
      var newoption = document.createElement("option");
      newoption.value = passitem;
      newoption.innerHTML = passitem;
      s2.options.add(newoption);
    }
  }
</script>