
<footer class="bg-body-tertiary text-center text-lg-start border-top border-primary">
  <div class="container p-4">
    <div class="row align-items-center border border-primary rounded rounded-xl p-3">

      <div class="col-lg-6 col-md-12 d-flex justify-content-center mb-2 mb-lg-0 custom-footer-img-h">
        <img src="{{url("asset/img/revisor-footer-img.svg")}}" alt="">
      </div>

      <div class="col-lg-6 col-md-12 text-center">
        <h5 class="text-uppercase">{{__("ui.do you want to become an auditor?")}}</h5>
        <p>
          {{__("click and make a request to the admin!")}}
        </p>
        <a href="{{ route('become.revisor') }}" class="btn btn-primary col-6">{{__("ui.send a request!")}}</a>
      </div>
      


    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://github.com/Hackademy-Part-time-35/ADAMs_Presto.it" target="_blank">ADAMs Team</a>
  </div>
  <!-- Copyright -->
</footer>