<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Card Example</title>
<style>
   .card {
    width: 1000px;
    max-width: 100%;
    height: 200px;
    background-color: #F7FAFC;
    border-radius: 0px 100px 100px 0px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 12px auto;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    position: relative;
    margin-left: -100px;
  }

  .card-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    flex-grow: 1;
  }

  .circle {
    position: absolute;
    top: 20px;
    left: calc(100% - 90px);
    width: 140px;
    height: 140px;
    background-color: #FFFFFF;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #1F95D2;
    font-weight: bold;
    font-size: 28px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  .card2 {
    width: 900px;
    max-width: 100%;
    height: 200px;
    background-color: #F7FAFC;
    border-radius: 100px 0px 0px 100px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 12px auto;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    position: relative;
    margin-left: 400px;
  }

  .card-content2 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    flex-grow: 1;
  }

  .circle2 {
    position: absolute;
    top: 20px;
    left: -12px;
    width: 140px;
    height: 140px;
    background-color: #FFFFFF;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #1F95D2;
    font-weight: bold;
    font-size: 28px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  /* Media Queries */
  @media screen and (max-width: 768px) {
    .card,
    .card2 {
      margin-left: 0;
    }

    .circle,
    .circle2 {
     content: hidden;
    }
  }
  /* Add your additional styling here */

</style>
</head>
<body>
<div class="container">
    <div style="text-align: center;">
      <h2>Our Services</h2>
      <h1 style="color: #EC2125; font-family: Monstreat;">Lorem Ipsum</h1>
    </div>
  <div class="card">
    <div class="card-content">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card.</p>
    </div>
    <div class="circle">1</div>
  </div>
  <div class="card2">
    <div class="card-content2">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card with the specified dimensions and styling.</p>
      <div class="circle2">2</div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card.</p>
    </div>
    <div class="circle">3</div>
  </div>
  <div class="card2">
    <div class="card-content2">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card with the specified dimensions and styling.</p>
      <div class="circle2">4</div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card.</p>
    </div>
    <div class="circle">5</div>
  </div>
  <div class="card2">
    <div class="card-content2">
      <!-- Add your card content here -->
      <h2>Card Example</h2>
      <p>This is an example of a card with the specified dimensions and styling.</p>
      <div class="circle2">6</div>
    </div>
  </div>
</body>
</html>
