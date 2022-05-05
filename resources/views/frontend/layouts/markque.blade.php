<section>
    <div class="container">
      <div class="row" id="title-news">
        <div class="mt-3">
          <table class="bg-body" border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td class="bg-light border p-1 fw-bold text-secondary" style="width: 90px; font-size: 18px;">
                  সর্বশেষ : </td>
                <td class="border py-2">
                  <marquee direction="left" onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="1"
                    scrollamount="3">
                    <!-- End Page-->
                    <span class="ticker">
                        @foreach ($circulars as $circular)

                        <a href="#" class="text-decoration-none fw-bold text-secondary">
                            {{$circular->title}}
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        @endforeach
                  </marquee>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>

  </section>
