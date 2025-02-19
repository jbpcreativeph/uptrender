<div class="d-flex align-items-center justify-content-center vh-100">

<div class = "container">
    <div class = "row align-items-center">
        <div class = "col-6">
            
            <h1>Join Us Today!</h1>
            <h3>Ready to Start Earning with Uptrend Credit Solutions?</h3>
            <h3>Sign Up Now & Become Part of a Thriving Network of Affiliates</h3>

        </div>
        <div class = "col-6">

            <h2 class = "mb-4">Affiliate Registration Form</h2>

            <div id="registration">
                <form id = "userRegistrationForm">

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "firstname" name="firstname" placeholder="First Name" required/>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "lastname" name="lastname" placeholder="Last Name" required/>
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="email" id = "emamiladdress" name="emailaddress" placeholder="Email" required />
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "phonenumber" name="phonenumber" placeholder="Phone Number" required/>
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "streetaddress" name="streetaddress" placeholder="Street Address" />
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "zipcode" name = "zipcode" v-model="zip" @blur="fetchLocation" @input="fetchLocation" maxlength="5" placeholder="Enter Zip Code" required/>
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "city" name = "city" v-model="city" placeholder="City" readonly />
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <select class="form-select form-control-lg" id = "state" name = "state" v-model="selectedState">
                                    <option value="" disabled selected>State</option>
                                    <option v-for="(name, code) in states" :value="code">{{ name }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "businessname" name="businessname" placeholder="Name of Business" required/>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" id = "title" name="title" placeholder="Title" />
                            </div>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <select id="yearPicker" class="form-select form-control-lg" id = "businessyear" name = "businessyear" v-model="selectedYear" required>
                                    <option v-for="year in years" :key="year" :value="year">{{ year }}</option>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <div class="mb-3">
                                <select class = "form-select form-control-lg" id = "marketingsoftware" name="marketingsoftware" placeholder="Software to be Used" />
                                    <option>Select Sofware to be Used</option>
                                    <?php foreach ($marketingsoftware as $software): ?>
                                    <option value = "<?= esc($software['idtblMarketingSoftwares']); ?>"><?= esc($software['softwarename']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Get Started</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</div>