/**
 * Created by anuj on 2/1/14.
 */
$(document).ready(function () {


    var state_city_json = {"Andaman and Nicobar Islands": ["Port Blair"],
        "Andhra Pradesh": ["Hyderabad", "Visakhapatnam", "Kakinada", "Vijayawada", "Guntur", "Warangal (Kazipet-Hanmakonda)", "Khammam", "Vellore", "Bhimavaram", "Secunderabad", "Patancheru", "Kurnool", "Tirupati", "Rajamundhry", "Karim Nagar", "Prakasam", "Nizamabad", "Nellore", "Eluru", "K.V.Rangareddy", "Medak", "Cuddapah", "Chittoor", "Krishna", "Srikakulam", "Vizianagaram", "Mahboobnagar ", "Ananthapur"],
        "Assam": ["Jorhat", "Guwahati", "Dispur", "Dibrugarh", "Tinsukia", "Nagaon", "Tezpur", "Sibsagar", "Silchar", "Sikarhati", "Thakurbazar", "Senimari", "Raypur", "Nalbari", "Udiana", "Tihu", "Digaru", "Ulukunchi", "Pub Lumding Bazar", "Diphu Ho", "Rakhasini", "Ramharirchar", "Ultapani", "Popragaon", "Upper Panbari", "Rangamati", "Nepalibasti", "Raksyasmari", "Furkating", "Siljuri", "Golaghat", "Suffry", "Chabua Air Field", "Udai Pur", "Parbatpur", "Silapathar", "Telikhalerpar", "Sialtek", "Bongaigaon"],
        "Bihar": ["Patna", "Bhagalpaur", "Giridih", "Jamshedpur", "Mahuva", "Gaya", "Muzzafarpur", "Motihari", "Munger", "Tara Nagar", "Sadikpur", "Sohni Patti", "Tenduni Chowk", "Waliganj", "Tungi", "Suhawanpur", "Usfa", "Tola Sohan Rai", "Tartar", "Saidabad", "Teyar", "Toygarh Bo", "Jamui Court", "Jhajha", "Ramgarh Bo", "Banka H O", "Shobnathpur", "Baidyanath Mandir", "Jasidih", "Raghunathpur", " JAMUA (GIRIDH)", "Sasaram Local Board", "Pahleza", "Daltonganj Ho.", "Aurangabad Kutchery", "Yadavpur Dukhharan", "Sainpatti S.p.singh", "Sitamarhi H.o", "Sheohar", "Vaishali", "Sirauna", "Sinuar Gopal", "Quadirabad", "Shubhankarpur", "Shekhopur", "Soeral", "Sri Ram Press Ndso", "Barauni Oil Refinery", "Tetrabad Chandpura", "Tulsibari", "Supaul Mdg", "Sulindabad", "Katihar Rs", "Purnea H O", "Araria", "Station Rd Forbesganj", "Jogbani", "Bahadurganj", "Kishanganj", "Saran", "Muzaffarpur"],
        "Chandigarh": ["Chandigarh", "Mohali"],
        "Chattisgarh": ["Bhilai", "Raipur", "Bilaspur", "Korba", "Durg", "Kawardha", "Mahasamund", "Dhamtari", "Bastar", "Kanker", "Dantewada", "Janjgir-champa", "Raigarh", "Surguja", "Koriya", "BHILIA-NAWAGAON"],
        "Delhi": ["New Delhi"],
        "Goa": ["Panaji", "Goa"],
        "Gujarat": ["Ahmedabad", "Gandhinagar", "Naroda", "Halol", "Vadodara", "Bharuch", "Rajkot", "Narol", "Veeraval", "Junagadh", "Mehsana", "Kalol", "Matoda", "Jam Nagar", "Bhuj", "Gandhidham", "Odhav", "Changodhar", "Sarkhej", "Moraiya", "Bhatt", "Vatava", "Kadi", "Santej", "Por", "Ranoli", "Waghodia", "Savli", "Ankleshwar", "Panoli", "Surat", "Sachin", "Hazira", "Bardoli", "Valsad", "Vapi", "Umargaon", "Daman - Nani Daman", "Silvasa", "Billimora", "Navsari", "Nadiad", "Porbandar", "Morbi", "Bhavnagar", "Anand", "Surendranagar", "Patan", "Kosamba", "Jamnagar", "Amreli", "Kachchh", "Mahesana", "Sabarkantha", "Mehesana", "Banaskantha", "Kheda"],
        "Haryana": ["Ambala", "Gurgaon", "Bhiwadi", "Panipat", "Manesar", "Dharuhera", "Kurukshetra", "Hissar", "Faridabad", "Ballabhgarh", "Rewari", "Rohtak", "Bahadurgarh", "Panchkula", "Sonepat", "Bawal", "New Delhi", "Karnal", "Bhiwani", "Jagadhari", "Chandigarh", "Mahendragarh", "Jhajjar", "Sirsa", "Jind", "Sonipat"],
        "Himachal Pradesh": ["Baddi", "Shimla", "Solan", "Parwanoo", "Pontasahib", "Sirmaur", "Una", "Kullu", "Kangra", "Chamba", "Hamirpur (HP)", "Sirmour", "Mandi"],
        "Jammu & Kashmir": ["Jammu", "Srinagar", "Kathua", "Budgam", "Anantanag", "Baramula", "Leh", "Kargil"],
        "Jharkhand": ["Jamshedpur", "Ranchi", "Dhanbad", "Bokaro", "Kolkata", " DUMRI (HAZARIBAGH)", "Ghatotand", " SURIYA", "Jhumri Tilaiya", "Jamadoba", "Katras Garh", "Sindri", "Chandankiari", "Kumardhubi", "Muhamma", "Nisachatti", "Pancher Dam", "Maithandam", " GOMOH", "Topchanchi", " JARIDIH BAZAR", "Ramgarh Cantt. Ho.", " RIGHT BANK TENUGHAT DAM", " PHUSRO BAZAR", "Ghatshila", "Kandra", "Manoharpur", "Gua", "Jhinkpani", "Noamundi", "Sini", "Chotamuri", "Silli", "Hazaribag"],
        "Karnataka": ["Bengaluru", "Hosur", "Bommasandra", "Mysore", "Mangalore", "Dharwad", "Hubli", "Belgaum", "Tumkur", "Manipal", "Gulbarga", "Tirupati", "Kolar", "Hoskote", "Ramanagar", "Mandiya", "Hospet", "Bangalore Rural", "Chikkaballapur", "Kodagu", "Chamrajnagar", "Hassan", "Udupi", "South Karnataka", "Chickmagalur", "Davangere", "Chitradurga", "Uttar Kannada", "Gadag", "Bellary", "Davangare", "Koppal", "Raichur", "Yadgir", "Bidar", "Bijapur", "Bagalkot", "Shimoga"],
        "Kerala": ["Kumbakonam", "Erode", "Madurai", "Karur", "Coimbatore", "Tirupur", "Salem", "Tiruchirappalli", "Cannanore", "Kochi", "Alwaye", "Kottayam", "Alleppy", "Quilon", "Trivandrum", "Calicut", "Trichur", "Palghat", "Tellicherry", "Ernakulam", "Sherthalai", "Munnar", "Tiruvalla", "Mallapuram", "Moolapatti", "Vaigallur", "Kasaragod Rs", "Ullody B.o", "Malappuram", "Muthalamada", "Vettekara B.o", "Ottapalam", "Sankaramangalam B.o", "Poyya", "Velloor", "Kumarakom South B.o", "Poonjar Thekkekra", "Pandalam Medical Mission", "Vilakkuvattom B.o", "Perumkadavila", "Kasargod", "Palakkad", "Idukki", "Pathanamthitta", "Kollam"],
        "Maharashtra": ["Nagpur", "Butibori", "Kalmeshwar", "Wardha", "Yavatmal", "Hingna", "Mumbai", "Thane", "Panvel", "Pune", "Ahmednagar", "Aurangabad", "Turbhe", "Chinchwad", "Kolhapur", "Ulhasnagar", "Pirangut", "Maval", "kalyan", "Navi Mumbai", "Virar", "Khopoli", "Taloja", "Kalamboli", "Talegaon", "Pimpari", "Hinjewadi (All Phases)", "Bhiwandi", "Nashik", "Sinnar", "Solapur", "Sangli", "Goa", "Jalgaon", "Palghar", "Tarapur", "Allandi", "Takwe", "Ranjangaon", "Chakan", "Ambarnath", "Badlapur", "Igatpuri", "Chandrapur", "Raigarh (MH)", "Satara", "Beed", "Latur", "Ahmed Nagar", "Ratnagiri", "Sindhdurg", "Dhule", "Nandurbar", "Jalna", "Parbhani", "Hingoli", "Nanded", "Bhandara", "Gondia", "Gadchiroli", "Buldhana", "Akola", "Washim", "Amravati"],
        "Mahdhya Pradesh": ["Indore", "Dewas", "Bhopal", "Pitampur", "Jabalpur", "Nagpur", "Ujjain", "Gwalior", "Mandideep", "Chhindwara", "East Nimar", "West Nimar", "Barwani", "Dhar", "Ratlam", "Jhabua", "Betul", "Hoshangabad", "Harda", "Vidisha", "Raisen", "Shajapur", "Rajgarh", "Sagar", "Damoh", "Chhatarpur", "Tikamgarh", "Datia", "Morena", "Bhind", "Seoni", "Balaghat", "Mandla", "Shahdol", "Umaria", "Anuppur", "Satna", "Rewa", "Sidhi", "Singrauli", "Narasinghpur", "Panna", "Guna", "Shivpuri"],
        "Manipur": ["Imphal"],
        "Meghalaya": ["Shillong", "Guwahati", "Tura H.o."],
        "Mizoram": ["Aizwal"],
        "Nagaland": ["Dimapur", "Viswema", "Zhadima"],
        "Orrissa": ["Bhubaneswar", "Cuttack", "Balasore", "Angul", "Rourkela", "Jharsguda", "Sukal", "Tangi", "Titip", "Banpur", "Janla", "Khurda H O", "Nayagarh H O", "Daspalla", "Siula", "Villigram", "Sarada", "Pathuripada", "Sunguda", "Narpada", "Taradinga", "Viruda", "Taradapada", "Tarajanga", "Kunjakothi", "Tikhiri", "Sunakhandi", "Tilotamadeipur", "Sekhpur", "Jajpur College", "Lembo", "Salijanga", "Masudpur", "Siha", "Salikotha", "Wada", "Ugratara", "Saraswati", "Tulasichoura", "Sialighati", "San Deuli", "Udala College", "Ukam", "Madhapur Ndtso", "Ranki", "Taratara", "Silij", "Thakurani", "Jubuli Town", "Sibulapasi", "Samal Barrage", "Balanda", "Kaniha", "Khamar", "Pallahara", "Sibapur", "Chhendipada", "Athmallik", "Kishoreganj", "Dhenkanal", "Kosala", "Palasi", "Totipuram", "Taratrini Hills", "Sriramchandrapur", "Rambha", "Tentuliapalli", "Syamsundarpur", "Sikiri", "Taluk Office Road Aska", "Sk", "Hatnagar", "Parlakhemundi Ho", "Phulbani H O", "Malisahi", "Tiangia", "Sunabeda-1", "Sunabeda-2", "Mathalput", "Motteru", "Taraput", "Kolabnagar", "Koraput R S", "Similiguda", "Tumusapalli", "Venkatpallam", "Tarlakota", "Nabarangpur Mdg", "Umerkote", "Paikapada", "Tolana", "Uditnarayanpur", "Turlakhaman", "Ranibanhal", "Malijubang", "Parkod", "Tarbod", "Sargadi", "Tikrapara Ndtso", "Spinning Mills Ndtso", "Sindurpur", "Tamia Bo", "Tikrapara Bo", "Totopara Bo", "Turekela Bo", "Ullunda So", "Sambalpur", "Hirakud Hsg-ii So", "Medical College Burla Ndt So", "Attabira", "Bargarh H O", "Sohella", "Tribanpur Bo", "Deogarh", "Rengali So", "Stn Road Brajaraj Nagar", "Belpahar R S", "Telitileimal Bo", "Tasladihi", "Sanghumunda", "Tarkera", "Ushra Colony", "Udusu", "Tamra", "Talita", "Tensa"],
        "Pondicherry": ["Pondicherry"],
        "Punjab": ["Bilaspur", "Ludhiana", "Amritsar", "Zirakpur", "Phagwara", "Mohali", "Jalandhar", "Kapurthala", "Patiala", "Ropar", "Gurdaspur", "Hoshiarpur", "Bhatinda", "Chandigarh", "Moga", "De Rabassi", "Ambala", "Barnala", "Sangrur", "Mansa", "Firozpur", "Muktsar"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Kota", "Ajmer", "Alwar", "Bhilwara", "Bhiwadi", "Bikaner", "Udaipur", "Dausa", "Tonk", "Sirohi", "Rajsamand", "Jhalawar", "Banswara", "Sikar", "Jhujhunu", "Hanumangarh", "Ganganagar", "Nagaur"],
        "Sikkim": ["Gangtok", "Shipgyare", "East Sikkim"],
        "Tamil Nadu": ["Chennai", "Madurai", "Coimbatore", "Tirupur", "Sriperumbadur", "Dindigul", "Rajapalayam", "Sivakasi", "Hosur", "Villipuram", "Vellore", "Ranipet", "Theni", "Ambasamudram", "Tuticorin", "Salem", "Coonoor", "Tirunelveli", "Nagerkoil", "Pondicherry", "Thirubhuvani", "Thanjavur", "Pudukkottai", "Erode", "Pollachi", "Virudhnagar", "Kovilpatti", "Tirukandalam", "Gummidipundi", "Chengalpattu", "Kelambakkam", "Maraimalai Nagar", "Karaikal", "Kumbakonam", "Karur", "Ambur", "Namakkal", "Tiruchirappalli", "Kanyakumari", "TINDIVANAM", "Villupuram", "Cuddalore", "Ariyalur", "Ramanathapuram", "Sivagana", "Sivaganga", "Tiruvallur", "Krishnagiri", "Mathur-dhamapuri", "Toppur", "Dharmapuri R S", "Puduchatram", "Idappadi Bazaar", "North Arcot", "Dharmapuri "],
        "Tripura": ["Agartala", "Udaipur Court", "West Nalkata"],
        "Uttar Pradesh": ["Jhansi", "Allahabad", "Varanasi", "Bhadohi", "Mirzapur", "Muzafar Nagar", "Jaunpur", "Noida (Greater Noida)", "Kanpur", "Lucknow", "Meerut", "Ghaziabad", "Sahibabad", "Mohan Nagar", "Modinagar", "Jagdishpur", "Bareilly", "Moradabad", "Saharanpur", "Mathura", "Agra", "Bulandshahr", "Aligarh", "Faizabad", "Firozabad", "Delhi", "Haridwar", "Rudrapur", "Roorkee", "Pantnagar", "Budaun", "Gautam Buddha Nagar", "Hathras", "Etawah", "Etah", "Farrukhabad", "Hamirpur", "Fatehpur", "Azamgarh", "Sultanpur", "Raebareli", "Pratapgarh", "Sonbhadra", "Ghazipur", "Hardoi", "Shahjahanpur", "Bijnor", "Bagpat", "Sitapur", "Kheri", "Udhamsingh Nagar", "Bageshwar", "Gonda", "Balrampur", "Bahraich", "Basti", "Maharajganj", "Deoria", "Kushinagar", "Mau", "Ballia", "Lalitpur", "Jalaun", "Banda", "Barabanki", "Buduan"],
        "Uttaranachal": ["Ghaziabad", "Moradabad", "Dehradun", "Rudrapur", "Haldwani", "Haridwar", "Nainital", "Pauri Garhwal", "Champawat", "Pithoragarh", "Kheri", "Almora", "Uttarkashi"],
        "West bengal": ["Siliguri (New Jalpaiguri)", "Kolkata", "Howrah", "Darjeeling", "Kurseong", "Cooch Behara", "Bardhaman", "Durgapur", "Malda", "Dankuni", "Old Jagacha", "Baltikuri", "Garalgacha", "Bhatta Nagar", "Sambay Pallay", "Pancharule", "Udayanarayanpur", "Ghoshpara", "Anantapur", "Banipur Howrah", "Bauria", "Chakashi", "Delta Mills", "Shyampur", "Uluberia R S", "Samta", "Panitras", "Sasoti", "Amta", "Bargachia", "Jagatballavpur", "Makardah", "Munshirhat", "Begri", "Chitrasenpur", "Gazipur", "Maju", "Pantihal", "Manikura", "Buro Shibiala", "Adconagar", "Badenganj", "Boinehi", "Boinchi Gram", "Gondalpara", "Rameswarpur", "Chatra Hooghly", "Kanaipur", "Bhanderhati", "Dhaniakhali", "Begampur", "Dasghara", "Jangipara", "Deulpara", "Saidpur", "Jangalpara", "Antpar", "Keshabpur", "Balagarh", "Chandrahati", "Guptipara", "Bengai", "Kamarpukur", "Goghat", "Batanal", "Baradangal", "Khandaghosh", "Santinagar", "Kanyapur", "Ukhra Puratan Hattala", "Arjunpur Bdn", "Dhatrigram", "Panagarh", " RAMJIBANPUR", "Salna", "Tajpur Purakona", " HURA", "Sagarbhanga", "Laha", "Ushardihi", " DALKHOLA", " ISLAMPUR COURT", "Danguajhar", "Birpara Bazar", "Krishi Viswa", "Falakata", "Kalchini", "Nutan Bazar", "Nagrakata", "Upen Chowki Kuchlibari", "Ghagra", "Uttar Falimari", "Subachanirpath", "Uttar Andaranfulbari", "Jaigaon B.O", "Nadia", " BAGULA", " HANSKHALI", "Shibnibas", " BARUA", " KURMITALA", " NASHIPUR RAJBATI", " BARUIPARA", " SATITARA", " NOADA", " KRISHNAPUR", " AURANGABAD", " JANGIPUR BARRAGE", " GHORSALA", "Nashipur Balagachi ", "Nabipur", " HABRA PRAFULLANAGAR", " NEW TOWN"]};


    $('#sf_element_state').change(function () {

        $(".city_option").remove();
        $state = $(this).val();

        var cites = state_city_json[$state];

        if ($state == '') {
            $(".city_option").remove();
        } else {
            $(cites).each(function (key, index) {
                var option = $('<option class="city_option"></option>');
                option.attr("value", index);
                option.html(index);
                $('.city').append(option);

            });
            $('.city').append('<option class="city_option" value="Other">Other</option>');

        }

    });






});
