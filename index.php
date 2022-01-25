<?php include_once "header.php";  ?> 
<!--Header-->
      <div class="container text-center">
        <div class="row">
          <div class="col-md-7 col-sm-12 showcase-left text-white">
            <h6>YOU WANT IT, WE MAKE IT</h6>
            <h1>
              VIETNAM <br />
              ON THE GO
            </h1>
            <p>Welcome to Lavn restaurant! Let's discover our website.</p>
            <div class="middle">
            <?php if(!isset($_SESSION['customer_id'])){ ?>
              <button class="button button1" id="reserveLogin">
                Make a reservation
              </button>
              <?php }else{ 
              $sql = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = {$_SESSION['customer_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
              ?>
              <button class="button button1" id="makeAReserve">
              Make a reservation
              </button>
              <?php }?>
            </div>
          </div>
          <div class="col-md-5 col-sm-12 showcase-right h-25">
            <img id="food" src="images/header_picture.png" alt="Food" />
          </div>
        </div>
      </div>
    </header>
    <!--End of Header-->
    <!--Main page-->
    <main>
      <!--Section-1 Chef-->
      <section class="section-1" id="chef">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 col-12 showcase-left">
              <div class="chef-intro text-center">
                <p>MEET OUR CHEF!</p>
              </div>
              <div class="chef-name text-center">
                <p>Chef's Name</p>
              </div>
              <div class="about-chef text-center">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Eveniet, eos adipisci, magnam dolores quas numquam nulla
                  delectus qui veniam iste odit perspiciatis temporibus dolor
                  facere. Vero odit maxime deserunt nulla.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-12 showcase-right">
              <div class="headchef">
                <img src="images/head_chef.jpg" alt="Head Chef" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End of Section-1 Chef-->
      <!--Section-2 Menu-->
      <section class="section-2" id="menu">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <p class="text">MENU</p>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-6 col-md-12 menu showcase-left">
              <img src="images/chicken-noddle.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Chicken Noddle Soup - Pho Ga</h4>
                <p>Chicken breast in chicken broth.</p>
                <span>$15</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-right">
              <img src="images/beef-pho.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Beef Pho - Pho Bo</h4>
                <p>Beef stock, chuck roast steaks, fish sauce.</p>
                <span>$17</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-left">
              <img src="images/beef-noddle.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Beef Noddle Soup - Bun Bo</h4>
                <p>Beef brisket, beef shank, pork hocks, fish sauce.</p>
                <span>$20</span>
              </div>
            </div>
            <div class="col-lg-6 col-md -12 menu showcase-right">
              <img src="images/thick-noddle.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Thick Noddle Soup - Banh Canh</h4>
                <p>Thick noodle, pork knuckle and shrimp.</p>
                <span>$13</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-left">
              <img src="images/beef-stew.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Beef Stew - Bo Kho</h4>
                <p>Beef stock, chuck roast steaks, fish sauce.</p>
                <span>$15</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-right">
              <img src="images/seafood-noddle.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Seafood Noddle Soup - Hu Tieu</h4>
                <p>Seafood, pork soup.</p>
                <span>$17</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-left">
              <img src="images/beef-noddle-salad.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Beef Noddle Salad - Bun Xao</h4>
                <p>Beef brisket, beef shank, pork hocks.</p>
                <span>$20</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 menu showcase-right">
              <img src="images/crab-noddle-soup.jpg" class="rounded-circle" />
              <div class="content">
                <h4>Crab Noddle Soup - Bun Rieu</h4>
                <p>Tomato broth with freshwater crab.</p>
                <span>$15</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End of Section-2 Menu-->
      <!--Secton-3 Hours-->
      <section class="section-3" id="hours">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 col-12 showcase-left">
              <div class="open-pic">
                <img src="images/openinghours-1.jpg" />
              </div>
            </div>
            <div class="col-md-6 col-12 showcase-right">
              <div class="open-intro text-center">
                <p>WE'RE OPEN!</p>
              </div>
              <div class="open-hours text-center">
                <p>OPEN HOURS</p>
              </div>
              <div class="about-open text-center">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>MONDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>TUESDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>WEDNESDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>WEDNESDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>THURSDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>FRIDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>SATURDAY</th>
                        <td>8am - 8pm</td>
                      </tr>
                      <tr>
                        <th>SUNDAY</th>
                        <td>9am - 5pm</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End of section-3 Hours-->
      <!--Section-4 Reservation-->
      <section class="section-4" id="reservation">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6 showcase-left">
              <div class="card">
                <div class="card-header text-center">
                  <h1>Booking Form</h1>
                </div>
                <form action ="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="emailAddress">Email address</label>
                      <input
                        id="emailAddress"
                        class="form-control"
                        name="emailAddress"
                        type="email"
                        value="<?php if(isset($_SESSION['customer_id'])){echo htmlspecialchars($row['email']);} ?>"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="nameOfCust">Customer name</label>
                      <input
                        id="nameOfCust"
                        class="form-control"
                        name="nameOfCust"
                        type="text"
                        value="<?php if(isset($_SESSION['customer_id'])){ echo htmlspecialchars($row['customer_name']);} ?>"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="phoneNumber">Phone number</label>
                      <input
                        id="phoneNumber"
                        class="form-control"
                        name="phoneNumber"
                        type="text"
                        value="<?php if(isset($_SESSION['customer_id'])){echo htmlspecialchars($row['phone_number']);} ?>"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="numberPeople">Number of people</label>
                      <select
                        class="form-control"
                        name="numberPeople"
                        id="numberPeople"
                      >
                        <option value="0"></option>
                        <option value="1">1 Person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5">5 People</option>
                        <option value="6">6 People</option>
                        <option value="7">7 People</option>
                        <option value="8">8 People</option>
                        <option value="9">9 People</option>
                        <option value="10">10 People</option>
                        <option value="11">11 People</option>
                        <option value="12">12 People</option>
                        <option value="13">13 People</option>
                        <option value="14">14 People</option>
                        <option value="15">15 People</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="calendar">Date</label>
                      <input class="form-control" id="calendar" name="date" type="date" />
                    </div>
                    <div class="form-group">
                      <label for="time">Time</label>
                      <input class="form-control" name="time" id="time" type="time" min="08:00" max="20:00" />
                    </div>
                    <div class="form-group">
                      <label for="specialRequest">Special request</label>
                      <textarea
                        class="form-control"
                        id="specialRequest"
                        rows="3"
                        name="specialRequest"
                      ></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="form-action">
                      <?php if(!isset($_SESSION['customer_id'])){ ?>
                        <input id="reserveNowLogin" class="button button2" type="submit" name="submit" value="RESERVE NOW">
                      <?php }else{ 
                      $sql = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = {$_SESSION['customer_id']}");
                      if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                      }
                      ?>
                        <input id="reserveNow" class="button button2" type="submit" name="submit" value="RESERVE NOW">
                      <?php }?>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 showcase-right" id="booking-info">
              <div class="card">
                <div class="card-header text-center">
                  <h1>Booking Information</h1>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Customer Name: <span id="custName"> </span></h5>
                    </div>
                    <div class="col-sm-12">
                      <h5>Email: <span id="custEmail"> </span></h5>
                    </div>
                    <div class="col-sm-12">
                      <h5>Phone Number: <span id="custPhone"> </span></h5>
                    </div>
                  </div>
                </div>
                <div class="card-body" id="bookingList">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Booking ID: <span id="bookID"> </span></h5>
                    </div>
                    <div class="col-sm-12">
                      <h5>Booking Date: <span id="bookDate"> </span></h5>
                    </div>
                    <div class="col-sm-12">
                      <h5>Booking Time: <span id="bookTime"> </span></h5>
                    </div>
                    <div class="col-sm-12">
                      <h5>Number of People: <span id="bookPpl"> </span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End of Section-4 Reservation-->
      <!--Section-5 Story-->
      <section class="section-5" id="story">
        <div class="row">
          <div class="col-xl-12">
            <p class="text">OUR STORY</p>
          </div>
        </div>
        <div
          id="carouselExampleIndicators"
          class="carousel slide showcase-bottom"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="images/story_1.jpg" alt="First story" />
              <div class="carousel-caption d-none d-md-block">
                <h3>Why Vietnam?</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Perspiciatis ipsa deserunt mollitia odio natus in, nihil
                  dolore ducimus ea facilis assumenda aliquam rem, architecto
                  ut.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="d-block"
                src="images/story_2.jpg"
                alt="Second story"
              />
              <div class="carousel-caption d-none d-md-block">
                <h3>Where in Vietnam?</h3>
                <p>
                  Street food, defenitely! It is the cheapest and one of the
                  most delicious places to find cuisine in Vietnam.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block" src="images/story_3.jpg" alt="Third story" />
              <div class="carousel-caption d-none d-md-block">
                <h3>After the trip</h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Obcaecati optio et itaque molestias, eaque numquam
                  repellendus. Iusto perspiciatis libero neque?
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="d-block"
                src="images/story_4.jpg"
                alt="Fourth story"
              />
              <div class="carousel-caption d-none d-md-block">
                <h3>Since then</h3>
                <p>
                  Lavn has been one of the most favorite restaurant for not only
                  Vietnamese but also the foreigners.
                </p>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <!--End of section-5 Story-->
      <!--Section-6 Signup Login-->
      <!--End of Section-6 Log In-->
      <!--Section-7 Contact-->
      <section class="section-7" id="location">
        <div class="container showcase-bottom">
          <div class="row">
            <div class="col-sm-12">
              <p class="text">LOCATION</p>
            </div>
          </div>
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.615565192524!2d-73.9876131843148!3d40.74848394331907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b30eac9f%3A0xaca05ca48ab5ac2c!2s350+5th+Ave%2C+New+York%2C+NY+10118!5e0!3m2!1sen!2sus!4v1530981553173"
              frameborder="0"
              style="border: 0"
              allowfullscreen
            ></iframe>
          </div>
          <!--<p>We're in the Empire State Building, top by any time.</p>-->
        </div>
      </section>
      <!--End of Section-7 Contact-->
      <!--Footer-->
      <div class="info-wrapper col-12 showcase-bottom">
        <div class="info wrapper">
          <div class="row align-items-center">
            <div class="col-md-4 col-sm-5 about-us">
              <h4 class="text">About us</h4>
              <p class="text-content text-light">
                Lavn is founded in 2000. Simplicity, good food, good environment
                and good service.
              </p>
              <p class="pt-4 copy-right">&copy; 2022 All rights reserved</p>
            </div>
            <div class="col-md-5 col-sm-12 news">
              <h4 class="text">Newsletter</h4>
              <p class="text-content text-light">
                Stay Updated With News and Special Offers
              </p>
              <form class="form-inline">
                <div class="col pl-0">
                  <div class="input-group pr-5">
                    <input
                      type="text"
                      class="form-control bg-light email"
                      id="inlineFormInputGroupUsername2"
                      placeholder="Email"
                    />
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <a href="#reservation" class="text-dark"
                          ><i class="fas fa-arrow-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3 col-sm-12 social">
              <h4 class="text">Follow Us</h4>
              <p class="text-content text-light">Let us be social</p>
              <div class="column">
                <a href="#" class="fb text-light ic">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="ig text-light ic">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="tw text-light ic">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="yt text-light ic">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End of footer-->
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <!-- Javascript -->
    <script src="javascript/main.js"></script>
    <!-- <script src="javascript/login.js"></script>
    <script src="javascript/signup.js"></script> -->
  </body>
</html>
