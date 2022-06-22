<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Grand TalkShow</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/grand_talkshow.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">

    <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8">
            <h1 class="mb-5">
              Grand Talk Show
            </h1>
            <p class="mb-5">
              <b>Grand talk show</b> is a national scale talkshow as the opening event of FUTUREST 2022 which contains presentations and discussion of interesting material about renewable energy, especially the urgency of mitigating climate change and the role of future leaders (students) in tackling climate issues given by speakers who are experts in their fields.
            </p>
            <a href="#timeline" class="btn btn-primary">Show Timeline</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-journal-bookmark"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5 position-relative">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="mb-5">Grand Talk Show Timeline</h2>
        <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
          <div class="col position-relative">
            <div class="position-absolute rounded-timeline rounded-pill"></div>
            <h3>{{ item.date }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <section id="speakers" class="py-5">
      <div class="container py-5">
        <h2 class="text-center mb-5">Grand Talk Show Speakers</h2>
        <div class="row align-items-center">
          <!-- Col 1 -->
          <div class="col-md-4 text-center p-3 mb-4" v-for="item in speakers">
            <h3 class="mb-4">{{ item.title }}</h3>
            <i class="fas fa-user-alt mb-4"></i>
            <h3 class="speakers-name">{{ item.name }}</h3>
            <p>
              {{ item.job }}
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="pertanyaan" class="py-5">
      <div class="container py-5">
        <h2 class="mb-5 text-center">
          Grand Talk Show QNA
        </h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item" v-for="item in pertanyaan">
            <h3 class="accordion-header" :id="item.id">
              <button class="accordion-button shadow-none" :class="item.collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="item.dataBsTarget" :aria-expanded="item.ariaExpanded" :aria-controls="item.ariaControls">
                {{ item.question }}
              </button>
            </h3>
            <div :id="item.ariaControls" class="accordion-collapse collapse" :class="item.show" :aria-labelledby="item.id" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                {{ item.answer }}
              </div>
            </div>
          </div>
        </div>

        <br><br><br><br><br><br><br>
        <h2 class="text-center mb-5">Don't Forget To Regist!</h2>
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary mx-3" href="<?php echo base_url("register-grand-talkshow-event") ?>">
            Register!
          </a>
        </div>
        <br><br><br>
      </div>
    </section>

  </main>

  <footer>
    <?php
    $this->load->view('components/footer');
    ?>
  </footer>

  <?php
  $this->load->view('template/script');
  ?>

  <!-- Import js if need -->
  <script src="<?php echo base_url() ?>public/js/pages/grand_talkshow.js"></script>
</body>

</html>