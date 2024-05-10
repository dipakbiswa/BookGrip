<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Plan</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>

    section.pricing {
      height: 100%;
      /* background: #7e3af2; */
      /* background: linear-gradient(to right, #7e3af2, #9662f0); */
    }

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0.5rem 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }

  .pricing .card:hover .btn {
    opacity: 1;
  }
}
      #toast {
        visibility: hidden;
        max-width: 50px;
        height: 50px;
        /*margin-left: -125px;*/
        margin: auto;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;

        position: fixed;
        z-index: 1;
        left: 0;right:0;
        bottom: 30px;
        font-size: 17px;
        white-space: nowrap;
    }
    #toast #img{
      width: 50px;
      height: 50px;
        
        float: left;
        
        padding-top: 16px;
        padding-bottom: 16px;
        
        box-sizing: border-box;

        
        background-color: #111;
        color: #fff;
    }
    #toast #desc{

        
        color: #fff;
      
        padding: 16px;
        
        overflow: hidden;
      white-space: nowrap;
    }

    #toast.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes expand {
        from {min-width: 50px} 
        to {min-width: 350px}
    }

    @keyframes expand {
        from {min-width: 50px}
        to {min-width: 350px}
    }
    @-webkit-keyframes stay {
        from {min-width: 350px} 
        to {min-width: 350px}
    }

    @keyframes stay {
        from {min-width: 350px}
        to {min-width: 350px}
    }
    @-webkit-keyframes shrink {
        from {min-width: 350px;} 
        to {min-width: 50px;}
    }

    @keyframes shrink {
        from {min-width: 350px;} 
        to {min-width: 50px;}
    }

    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 60px; opacity: 0;}
    }

    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 60px; opacity: 0;}
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body onload="launch_toast()">

    <section class="pricing py-5">
      <div class="container">
        <center><h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Select Your Subscription Plan
        </h2></center>
        <br>
        
        <!-- Cards with title -->
        {{-- <center><h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        If you need more info, please check <a href="{{ route('pricing') }}"> Pricing Plans.</a>
        </h4></center> --}}


        <div class="row">
          <!-- Free Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li">✅</span> Keyword Research (10 Keywords)</li>
                  <li><span class="fa-li">✅</span> Low Content Studio (Limited Templates)</li>
                  <li><span class="fa-li">✅</span> Cover Creator (Limited Templates)</li>
                  <li><span class="fa-li">✅</span> Video Tutorials & Resources</li>
                  <li><span class="fa-li">✅</span> Email Support 24/7</li>
                  <li><span class="fa-li">✅</span> Private FB Community</li>
                  <li><span class="fa-li">✅</span> Description Formatter </li>
                  <li class="text-muted"><span class="fa-li">❌</span> Sales Tracker Chrome Extension</li>
                  <li class="text-muted"><span class="fa-li">❌</span> Book Scout</li>
                  <li class="text-muted"><span class="fa-li">❌</span> Product Competitors</li>
                  <li class="text-muted"><span class="fa-li">❌</span> Book Grip Editor</li>
                  <li class="text-muted"><span class="fa-li">❌</span> Trademark Checker</li>
                </ul>
                <div class="d-grid">
                  <a style="background: #7e3af2; border: 1px solid #7e3af2;" href="{{ route('dashboard') }}" class="btn btn-primary text-uppercase">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Plus Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Monthly</h5>
                <h6 class="card-price text-center">$34.99<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li">✅</span> Keyword Research (Unlimited)</li>
                  <li><span class="fa-li">✅</span> Low Content Studio (Unlimited Templates)</li>
                  <li><span class="fa-li">✅</span> Cover Creator (Unlimited Templates)</li>
                  <li><span class="fa-li">✅</span> Video Tutorials & Resources</li>
                  <li><span class="fa-li">✅</span> Email & Chat Support 24/7</li>
                  <li><span class="fa-li">✅</span> Private FB Community</li>
                  <li><span class="fa-li">✅</span> Description Formatter </li>
                  <li><span class="fa-li">✅</span> Sales Tracker Chrome Extension</li>
                  <li><span class="fa-li">✅</span> Book Scout</li>
                  <li><span class="fa-li">✅</span> Product Competitors</li>
                  <li><span class="fa-li">✅</span> Book Grip Editor</li>
                  <li><span class="fa-li">✅</span> Trademark Checker</li>
                </ul>
                <div class="d-grid">
                  <a style="background: #7e3af2; border: 1px solid #7e3af2;" href="https://www.digistore24.com/product/451763?email={{auth()->user()->email}}" class="btn btn-primary text-uppercase">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Yearly</h5>
                <h6 class="card-price text-center">$349.99<span class="period">/month</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li">✅</span> Keyword Research (Unlimited)</li>
                  <li><span class="fa-li">✅</span> Low Content Studio (Unlimited Templates)</li>
                  <li><span class="fa-li">✅</span> Cover Creator (Unlimited Templates)</li>
                  <li><span class="fa-li">✅</span> Video Tutorials & Resources</li>
                  <li><span class="fa-li">✅</span> Email & Chat Support 24/7</li>
                  <li><span class="fa-li">✅</span> Private FB Community</li>
                  <li><span class="fa-li">✅</span> Description Formatter </li>
                  <li><span class="fa-li">✅</span> Sales Tracker Chrome Extension</li>
                  <li><span class="fa-li">✅</span> Book Scout</li>
                  <li><span class="fa-li">✅</span> Product Competitors</li>
                  <li><span class="fa-li">✅</span> Book Grip Editor</li>
                  <li><span class="fa-li">✅</span> Trademark Checker</li>
                </ul>
                <div class="d-grid">
                  <a href="https://www.digistore24.com/product/451763?email={{auth()->user()->email}}" style="background: #7e3af2; border: 1px solid #7e3af2;" class="btn btn-primary text-uppercase">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    {{-- Toast message --}}
    <div id="toast"><div id="img">
      <span class="material-symbols-outlined">
      done_all
      </span>
    </div>
    <div id="desc">Email verified! Now select a plan.</div>
    {{-- Toast message     --}}


    <script src="https://cdn.transaction.cloud/latest/widget.min.js"></script>
    <script>
      function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
    </script>
</body>
</html>