
<div class="pt-3 mt-3" style="  align-items: center; background-color: #ffd54f; display: flex;">
    
    <div class="container" style="  color: #333; margin: 0 auto; text-align: center;">
        <h1 id="headline" style="  font-weight: normal; letter-spacing: .125rem; text-transform: uppercase; font-weight:600">
            Countdown to Sale off day, Up to 50%
        </h1>
        <div id="countdown">
          <ul>
            <li class="text-time"><span id="days"></span>days</li>
            <li class="text-time"><span id="hours"></span>Hours</li>
            <li class="text-time"><span id="minutes"></span>Minutes</li>
            <li class="text-time"><span id="seconds"></span>Seconds</li>
          </ul>
        </div>
        <div id="content" class="emoji">
          <span>🥳</span>
          <span>🎉</span>
          <span>🎂</span>
        </div>
      </div>

</div>

    <style>
        .text-time {
            display: inline-block;
            font-size: 1.5em;
            list-style-type: none;
            padding: 1em;
            text-transform: uppercase;
        }
        .text-time span{
            display: block;
            font-size: 4.5rem;  
        }
        .emoji {
            display: none;
            padding: 1rem;
        }
        .emoji span {
            font-size: 4rem;
            padding: 0 .5rem;
        }
    </style>

  <script>
      (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "04/17/", // this is the date I want to count down to (mm/dd/yyyy)
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
  </script>