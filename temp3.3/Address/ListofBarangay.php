<script type="text/javascript">
  function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "Santa Mesa"){
      var optionArray = ["","Barangay 587","Barangay 587-A"
      <?php for ($Bar = 588; $Bar <= 636; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      ?>
      ];
    }else if(s1.value == "Santa Mesa Height"){
      var optionArray = ["","Lourdes","Maharlika","Saint Peter"];
    }else if(s1.value == "Tondo"){
      var optionArray = ["","Barangay 48","Barangay 51","Barangay 52","Barangay 55"
      <?php for ($Bar = 154; $Bar <= 165; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      for ($Bar = 190; $Bar <= 267; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      ?>
      ,"Barangay 202-A"];
    }else if(s1.value == "Intramuros"){
      var optionArray = ["","Barangay 654","Barangay 655","Barangay 656","Barangay 657","Barangay 658"];
    }else if(s1.value == "Santa Ana"){
      var optionArray = ["","Barangay 892","Barangay 894","Barangay 895"
      <?php for ($Bar = 897; $Bar <= 905; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      ?>
      ];
    }else if(s1.value == "Ermita"){
      var optionArray = ["","Barangay 600-A","Barangay 659","Barangay 659-A","Barangay 660","Barangay 661","Barangay 663","Barangay 663-A"];
    }else if(s1.value == "New Manila Area"){
      var optionArray = ["","Mariana","Dmayang Lagi"];
    }else if(s1.value == "Santa Cruz Area"){
      var optionArray = [""
      <?php for ($Bar = 297; $Bar <= 382; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      ?>
      ];
    }else if(s1.value == "Binondo Area"){
      var optionArray = [""
      <?php for ($Bar = 287; $Bar <= 296; $Bar++) {
      	echo ",'Barangay ".$Bar."'";
      }
      ?>
      ];
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