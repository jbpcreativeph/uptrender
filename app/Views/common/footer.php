
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>

  <script src="<?= base_url(); ?>themes/adminkit/static/js/app.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
        if (document.querySelector("#registration")) {

          const app = Vue.createApp({
            data() {
              return {
                selectedYear: new Date().getFullYear(), // Default to current year
                years: [], // Array to hold year options
                zip: '',
                city: '',
                selectedState: '',
                states: {
                  "AL": "Alabama", "AK": "Alaska", "AZ": "Arizona", "AR": "Arkansas", "CA": "California",
                  "CO": "Colorado", "CT": "Connecticut", "DE": "Delaware", "FL": "Florida", "GA": "Georgia",
                  "HI": "Hawaii", "ID": "Idaho", "IL": "Illinois", "IN": "Indiana", "IA": "Iowa",
                  "KS": "Kansas", "KY": "Kentucky", "LA": "Louisiana", "ME": "Maine", "MD": "Maryland",
                  "MA": "Massachusetts", "MI": "Michigan", "MN": "Minnesota", "MS": "Mississippi", "MO": "Missouri",
                  "MT": "Montana", "NE": "Nebraska", "NV": "Nevada", "NH": "New Hampshire", "NJ": "New Jersey",
                  "NM": "New Mexico", "NY": "New York", "NC": "North Carolina", "ND": "North Dakota", "OH": "Ohio",
                  "OK": "Oklahoma", "OR": "Oregon", "PA": "Pennsylvania", "RI": "Rhode Island", "SC": "South Carolina",
                  "SD": "South Dakota", "TN": "Tennessee", "TX": "Texas", "UT": "Utah", "VT": "Vermont",
                  "VA": "Virginia", "WA": "Washington", "WV": "West Virginia", "WI": "Wisconsin", "WY": "Wyoming"
                }
              };
            },
            mounted() {
              this.generateYears();
            },
            methods: {
              generateYears() {
                const startYear = 1900;
                const currentYear = new Date().getFullYear();
                for (let year = currentYear; year >= startYear; year--) {
                  this.years.push(year);
                }
              },
              async fetchLocation() {
                if (this.zip.length === 5 && /^\d{5}$/.test(this.zip)) {
                  console.log("step01");
                  try {
                    const response = await fetch(`https://api.zippopotam.us/us/${this.zip}`);
                    if (!response.ok) throw new Error('ZIP Code not found');

                    const data = await response.json();
                    this.city = data.places[0]['place name'];
                    this.selectedState = data.places[0]['state abbreviation'];
                  } catch (error) {
                    console.error('Error fetching location:', error);
                    this.city = '';
                    this.selectedState = '';
                  }
                }
              }
            }
          });

          app.mount("#registration");

        }
    });
  </script>

  <script>
    $(document).ready(function() {
        $('#userRegistrationForm').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '<?= base_url('register/registerAffiliate') ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        //alert('Registration successful! Redirecting...');
                        window.location.href = response.redirect;
                    } else {
                        //alert('Error: ' + response.message);
                    }
                }
            });
        });
    });
  </script>

  <script>
    $(document).ready(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '<?= base_url('login/authenticate') ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        window.location.href = "<?= base_url('dashboard'); ?>";
                    } else {
                        //$("#errorMessage").text(response.message);
                        //$("#errorModal").modal("show"); // Show Bootstrap Modal
                        console.log(response.message);
                    }
                }
            });
        });
    });
  </script>

</body>
</html>