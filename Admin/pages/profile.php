<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<center>
    <div class="box">
        <img class="profile_img" src="img/profile_img.png" id="thePFP">
        <div class="Profile-pic-div">
          <input type="file" class="file" id="file" accept="image/*" style="cursor: pointer">
          <label for="file">EDIT PIC</label>
        </div>
          <input type="text" name="" placeholder="First Name">
          <input type="text" name="" placeholder="Last Name">
          <input type="email" name="" placeholder="Email">
          <input type="text" name="" placeholder="Phone Number">
          <input type="text" name="" placeholder="Department">
          <input type="text" name="" placeholder="Academic Year">
          <input type="text" name="" placeholder="Batch">
          <input type="text" name="" placeholder="Student ID Num">
          <input type="text" name="" placeholder="Date of Birth">
          <input type="text" name="" placeholder="Gender">
          <button style="float: left;margin: 10px 0 0 18.2%;">CANCEL</button>
          <button style="float: right;margin: 10px 18.2%;">DONE</button>








    </div>
</center>
<script>
    const imgDiv = document.querySelector('.profile_pic_div');
    const img = document.querySelector('#thePFP');
    const file = document.querySelector('#file');

    file.addEventListener('change',function(){
      const choosedFile =this.files[0];


      if(choosedFile) {
        const reader = new FileReader();

        reader.addEventListener('load',function(){
          img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        

        }
      });
    

 
  </script>
</body>
</html>