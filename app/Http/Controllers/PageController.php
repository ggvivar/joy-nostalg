<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    //
    private function makeNav()
    {
        //static for navigation list 
        $Items = [
            ['label' => 'Who We Are', 'url' => route("Who-We-Are")],
            ['label' => 'What We Do', 'url' => route('What-We-Do')],
            ['label' => "What's New", 'url' => route('Whats-New')],
            ['label' => 'Join Us', 'url' => route('Careers')],
            ['label' => 'Contact Us', 'url' => route('ContactUs')],
        ];
        return $Items;
    }


    private function getCompanies(){
        //static companies
        $items = [
            ['label' => "HOMES"],
            ['label' => "CONSTUCTION"],
            ['label' => "PROPERTY MANAGEMENT"],
            ['label' => "POWER"],
            ['label' => "HOSPITALITY"],
            ['label' => "DIGITAL"],
            ['label' => "FOUNDATION"],
        ];
        return $items;
    }

    private function getCompanyDetails(){
        $sampleImage ="https://media.licdn.com/dms/image/v2/C5112AQFRm8EEuoZA5A/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1520134955856?e=2147483647&v=beta&t=U7z9V-pZw4JclYIa8ngD6Buxij04tIhCd36k4MvbL6c";
        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $items = [
         ['img_url' =>  asset('img/Photos/homepage/Home 2.png'),
         'companyName' => "Joy~Nostalg Homes",
         'companyDescription' => "Joy~Nostalg Homes range from socialized to middle-income properties located in thriving cities across the Greater Manila Area.",
         'companyWebsite' => ""],
         ['img_url' => asset('img/Photos/homepage/Home 3.png'),
         'companyName' => "Joy~Nostalg Power",
         'companyDescription' => "Joy~Nostalg Power offers sustainable and innovative energy solutions for diverse communities across the Philippines.",
         'companyWebsite' => ""],
         ['img_url' => asset('img/Photos/homepage/Home 4.png'),
         'companyName' => "Joy~Nostalg Hospitality",
         'companyDescription' => "Joy~Nostalg Hotel & Suites Manila, managed by Accor, is a five-star hotel at the heart of the Ortigas Central Business District in Pasig City.",
         'companyWebsite' => ""],
         ['img_url' => asset('img/Photos/homepage/Home 5.png'),
         'companyName' => "Joy~Nostalg Culinary",
         'companyDescription' => "The Empress Dining Palace is a modern Chinese fine dining restaurant located in the bustling center of Bonifacio Global City, Taguig.",
         'companyWebsite' => ""],
         ['img_url' => asset('img/Photos/homepage/Home 6.png'),
         'companyName' => "Joy~Nostalg Enclavewrx",
         'companyDescription' => "Joy~Nostalg Enclavewrx offers services that encompass construction management, property management, and digital development",
         'companyWebsite' => ""]
     ];
     return $items;
 }

 private function getChristude(){
    $items = [
     [
      'Value'=> 'Commitment',
      'Description' =>  'is our choice to be purposefully passionate and pious in pursuing the plenary performance of our pledges; painlessly.'
  ],
  [
      'Value'=> 'Happiness',
      'Description' =>  'is our choice to be gratefully happy and humbled as the cause and causing for joy, hope, and love in all of life and its goodness; always.' 
  ],
  [
      'Value'=> 'Responsibility',
      'Description' =>  'is our choice to be willfully ready and reliable in leading ourselves in all endeavors and challenges to accountable success; diligently.' 
  ],
  [
      'Value'=> 'Integrity',
      'Description' =>  'is our choice to be honorably courageous and consistent in conducting ourselves in wholeness, honesty, and fairness; truthfully.' 
  ],
  [
      'Value'=> 'Simplicity',
      'Description' =>  'is our choice to be sagely centered in charting correct clarity amidst complexities for ease, efficiency, and efficacy of our solutions; freely.' 
  ],
  [
      'Value'=> 'CHRISTUDE',
      'Description' =>  'is our authentic choice to be spiritually Christ-like in our opportune way of life for servitude and stewardship, with compassion in thinking with our hearts and feeling with our minds, for our love and light to radiate together for others, celebrating and bearing witness to the Love of Christ, and to genuinely answer His Call and Will to Love; joyfully.' 
  ],
  [
      'Value'=> 'Tenacity',
      'Description' =>  'is our choice to be firmly resolute with perseverance and precision to have and hold our aspirations to achievements; constantly.' 
  ],
  [
      'Value'=> 'Unity',
      'Description' =>  'is our choice to be ubiquitously one in soul, mind, and body, together as a family, for others as a community, aligned in diversity; unanimously.' 
  ],
  [
      'Value'=> 'Dynamism',
      'Description' =>  'is our choice to be creatively successful to achieve greatness, empowered with enterprising force and entrepreneurial spirit; respectfully.' 
  ],
  [
      'Value'=> 'Excellence',
      'Description' =>  'is our choice to be wonderfully great to excel and fulfill our mission by artful design beyond impossibilities and indifference, with grace and glory for God; truly.' 
  ]                    
];
return $items;
}
private function getCarousel(string $page = null)
{     
  $items = [
    ['img_url' => asset('img/Photos/homepage/Home 1.png'),
    'header' => "Home the Homeless, Power the Powerless, Love the Loveleast",
    'content' => "",
],
['img_url' => asset('img/Photos/homepage/Home 2.png'),
'header' => "Slide 2",
'content' => "**insert text here**",
],
['img_url' => asset('img/Photos/homepage/Home 3.png'),
'header' => "Slide 3",
'content' => "**insert text here**",
],
['img_url' => asset('img/Photos/homepage/Home 4.png'),
'header' => "Slide 4",
'content' => "**insert text here**",
],
['img_url' => asset('img/Photos/homepage/Home 5.png'),
'header' => "Slide 5",
'content' => "**insert text here**",
],
['img_url' => asset('img/Photos/homepage/Home 6.png'),
'header' => "Slide 6",
'content' => "**insert text here**",
],
['img_url' => asset('img/Photos/homepage/Home 7.png'),
'header' => "Slide 7",
'content' => "**insert text here**",
]
];
return $items;
}
private function getMilestone(string $page = null)
{     
  $items = [
      ['img_url' => asset('img/Photos/who_we_are/Who We Are 3.png'),
      'header' => "THE FIRST PASINAYA HOMES IN NAIC, CAVITE",
      'content' => "On September 23, 2017, Pasinaya Homes, in collaboration with Extraordinary Enclaves and the Joy~Nostalg Foundation, marked a significant community achievement with its inaugural home ownership turn-over and house blessing ceremony at Brgy. Sabang, Naic, Cavite. The event, graced by Naic Mayor Junio Dualan, Pag-IBIG Senior Vice President Benjamin Felix, Cavite Governor Boying Remulla, and other notable figures, reaffirmed our mission of homing the homeless and providing quality homes to uplift community spirit and enhance living standards in the region.",
  ]

];
return $items;
}

private function getArticles(){
    $items = [
      [
       'id' => 1,
       'img_url' => asset('img/Photos/homepage/Home 8.png'),
       'title' => "Jacinto C. Ng, Jr. Wins EY Entrepreneur Of The Year 2024 Philippines",
       'date'   => "October 23, 2024",
       'content' => "Jacinto C. Ng, Jr., Executive Officer of the Joy~Nostalg Group, has clinched the EY Entrepreneur Of The Year 2024 Philippines award. Recognized for his transformative leadership and social impact, Mr. Ng now advances to the global stage in Monaco.",
   ],
   [
       'id' => 2,
       'img_url' => asset('img/Photos/homepage/Home 7.png'),
       'title' => "Title of Article",
       'date'   => "December 1, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],            
];
return $items;


}
private function getAwards(){
    $items = [
      [
       'id' => 1,
       'img_url' => asset('img/Photos/who_we_are/Who We Are 5.png'),
       'title' => "Jacinto C. Ng, Jr. Wins EY Entrepreneur Of The Year 2024 Philippines",
       'date'   => "October 23, 2024",
       'content' => "Jacinto C. Ng, Jr., Executive Officer of the Joy~Nostalg Group, has clinched the EY Entrepreneur Of The Year 2024 Philippines award. Recognized for his transformative leadership and social impact, Mr. Ng now advances to the global stage in Monaco.",
   ],
   [
       'id' => 2,
       'img_url' => asset('img/Photos/homepage/Home 7.png'),
       'title' => "Title of Article",
       'date'   => "December 1, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],            
];
return $items;

}
private function getLeaders(){
    $items = [
        ['name' => 'ABRAHAM GO',
        'title' => 'Family Management Office, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Abraham Go.png')],
        ['name' => 'EILEEN DOYLE',
        'title' => 'Land Investment Office and Property
        Development Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Eileen Uy-Doyle.png')],
        ['name' => 'MYLENE LIM',
        'title' => 'Construction Management Unit and
        People Culture Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Myleen Lim.png')],
        ['name' => 'MARY EVANS RAMOS',
        'title' => 'Property Management Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Evans Ramos.png')],
        ['name' => 'NICANDRO FUCOY',
        'title' => 'Energy Development Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Nicky Fucoy.png')],
        ['name' => 'ACMAD RIZALDY MOTI',
        'title' => 'Digital Development Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Acmad Moti.png')],
        ['name' => 'TERENCE ANG',
        'title' => 'Foundation Development Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Terrence Ang.png')],
        ['name' => 'JEN DELA PAZ',
        'title' => 'Hospitality Development Unit, CEO',
        'image' => asset('img/Photos/who_we_are/EXECUTIVES/Jen Dela Paz.png')],
    ];
    return $items;
}
public static function getProjects($segment){

    $items = [
        "Extraordinary" =>
        [
           [ "name"=>"Pasinaya Homes",
           "description"=> "Affordable two-story homes offering new beginnings, symbolizing hope and progress for Filipino working-class families.",
           "img_url" => asset('/img/Photos/what_we_do/3.png'),
"url" => "https://www.facebook.com/ExtraordinaryEnclaves"
       ],
       [ "name"=>"Pagsikat Place",
       "description"=> "Pagsikat Place features upgraded housing for families seeking to elevate their living standards and achieve their dreams.",
       "img_url" => asset('/img/Photos/what_we_do/4.png'),
"url" => "https://www.facebook.com/ExtraordinaryEnclaves"
         ],
         [ "name"=>"Pasinaraw",
   "description"=> "Solar-powered homes promoting sustainability and pride, empowering buyers as heroes for their families, the environment, and the nation.",
   "img_url" => asset('/img/Photos/what_we_do/5.png'),
"url" => "https://www.facebook.com/ExtraordinaryEnclaves"
        ],
        ],
"Everyhome"=>[
    [ "name"=>"Pagsibol Village",
    "description"=> "Affordable duplex homes for growing families, nurturing progress and prosperity in peaceful, low-density communities.",
    "img_url" => asset('/img/Photos/what_we_do/7.png'),
"url" => ""
]
],
"Elanvital"=>[
    [ "name"=>"Nostalji Enclave",
    "description"=> "Nostalji Enclave combines suburban comfort with urban conveniences in a secure, master-planned 13.1-hectare community in Dasmariñas, Cavite",
    "img_url" => asset('/img/Photos/what_we_do/9.png'),
"url" => ""
],
[ "name"=>"Tradizo Enclave",
"description"=> "Modern Filipino-themed homes in Imus, Cavite, combining convenience, contemporary design, and practicality for thriving families.",
"img_url" => asset('/img/Photos/what_we_do/10.png'),
"url" => ""
],
[ "name"=>"Jubilation Enclave",
"description"=> "A lively community in Biñan, Laguna, featuring homes designed for joyful living with access to essential amenities.",
"img_url" => asset('/img/Photos/what_we_do/11.png'),
"url" => ""
],
[ "name"=>"Jubilation Enclave North",
"description"=> "An extension of Jubilation Enclave in Biñan, Laguna, providing enhanced home designs and a vibrant suburban lifestyle.",
"img_url" => asset('/img/Photos/what_we_do/12.png'),
"url" => ""
],
[ "name"=>"Penthouse by Jubilation",
"description"=> "The Penthouse inside Jubilation Enclave North is Elanvital Enclaves’ first three-story townhome community. ",
"img_url" => asset('/img/Photos/what_we_do/13.png'),
"url" => ""

],
[ "name"=>"Estanzia Enclave",
"description"=> "A 30-hectare residential development in Tanza, Cavite, designed with seaside elements and nestled in lush, tranquil environment.",
"img_url" => asset('/img/Photos/what_we_do/14.png'),
"url" => "https://elanvitalenclaves.com.ph/estanzia-enclave/"
],
[ "name"=>"Valenzia Enclave",
"description"=> "An 8.3 hectare project located in General Trias, Cavite inspired by the Valencia Festival. It’s ideal for families seeking comfort and sophistication.",
"img_url" => asset('/img/Photos/what_we_do/15.png'),
"url" => ""
],
[ "name"=>"Villaggio Enclave",
"description"=> "A residential community in General Trias City, Cavite, with architectural design heavily inspired by cosmopolitan Italian Casas across 3.8 hectares. ",
"img_url" => asset('/img/Photos/what_we_do/16.png'),
"url" => ""
],
[ "name"=>"Agapeya Towns",
"description"=> "Two-story duplex homes in Calamba, Laguna, celebrating the hard work of Filipino families with designs focused on comfort and accessibility.",
"img_url" => asset('/img/Photos/what_we_do/17.png'),
"url" => ""
],
[ "name"=>"Terraces at Tradizo",
"description"=> "Chic, secure mid-rise residences in Imus, Cavite, catering to young professionals and small families.",
"img_url" => asset('/img/Photos/what_we_do/18.png'),
"url" => ""
],
[ "name"=>"Terraces at Jubilation",
"description"=> "Contemporary vertical homes in Biñan, Laguna, offering convenience and vibrant community living.",
"img_url" => asset('/img/Photos/what_we_do/19.png'),
"url" => ""
],
[ "name"=>"Zaya",
"description"=> "Affordable studio residences in Sta. Rosa, Laguna, featuring modern amenities and strategic access to key destinations.",
"img_url" => asset('/img/Photos/what_we_do/20.png'),
"url" => ""
]
]
];
return $items[$segment];
}
public static function getJobListing(array $filters = null,  $id = null)
{
    // Define the path to the CSV file

    $filePath = public_path('csv/samplejoblisting.csv');

    // Check if the file exists
    if (!File::exists($filePath)) {
        abort(404, 'CSV file not found.');
    }

    $items = [];

    try {
        // Open the CSV file for reading
        $file = fopen($filePath, 'r');

        // Read the header row
        $headers = fgetcsv($file);

        // Read the rest of the file and create associative arrays for each row
        while (($row = fgetcsv($file)) !== false) {
            $items[] = array_combine($headers, $row);
        }

        fclose($file);
    } catch (\Exception $e) {
        abort(500, 'Error reading the CSV file: ' . $e->getMessage());
    }
    if($id)
    {
     if ($id !== null) {
        foreach ($items as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}
    // Apply filters if provided
if ($filters) {
    $filteredItems = [];
    foreach ($items as $item) {
        if (!empty($filters['job_title']) && stripos($item['Job_Title'], $filters['job_title']) === false) {
            continue;
        }
        if (!empty($filters['filter_dept']) && $filters['filter_dept'] !== 'all' && $item['filter_dept'] !== $filters['filter_dept']) {
            continue;
        }
        if (!empty($filters['filter_location']) && $filters['filter_location'] !== 'all' && $item['Location'] !== $filters['filter_location']) {
            continue;
        }
        if (!empty($filters['filter_company']) && $filters['filter_company'] !== 'all' && $item['Group'] !== $filters['filter_company']) {
            continue;
        }

        $filteredItems[] = $item;
    }
    $items = $filteredItems;
}
$page = request()->get('page', 1);
$perPage = request()->get('per_page', 25);
$total = count($items);

$joblisting = new LengthAwarePaginator(
    array_slice($items, ($page - 1) * $perPage, $perPage),
    $total,
    $perPage,
    $page,
    ['path' => request()->url(), 'query' => request()->query()]
);
    // $items[] = $joblisting;
return [$items,$joblisting];
}


public function getCompanyCategory(){
    $items = [
      "HOMES",
      "CONSTRUCTION",
      "PROPERTY MANAGEMENT",
      "POWER",
      "HOSPITALITY",
      "DIGITAL",
      "FOUNDATION",
  ];
  return $items;
}
public function getContentNews($id = null) {
    $items = [
        [
            'id' => 1,
            'rank' => 2,
            'img_url' => asset('img/Photos/what_s_new/What_s New 2.png'),
            'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
            'date' => "October 24, 2024",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            'id' => 2,
            'rank' => 1,
            'img_url' => asset('img/Photos/what_s_new/What_s New 3.png'),
            'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
            'date' => "October 23, 2024",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            'id' => 3,
            'rank' => 3,
            'img_url' => asset('img/Photos/what_s_new/What_s New 4.png'),
            'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
            'date' => "October 23, 2024",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ]
    ];

    if ($id !== null) {
        foreach ($items as $item) {
            // dd($item);
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }

    return $items;
}

public function getContentStories(){
    $items = [
      [
       'id' => 1,
       'img_url' => asset('img/Photos/what_s_new/What_s New 5.png'),
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 24, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],
   [
       'id' => 2,
       'img_url' => asset('img/Photos/what_s_new/What_s New 6.png'),
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 23, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],
   [
       'id' => 3,
       'img_url' => asset('img/Photos/what_s_new/What_s New 7.png'),
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 23, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ]];
   return $items;
}
public function getContentVideos(){
    $items = [
      [
       'id' => 1,
       'rank' => 2,
       'url' => "https://www.youtube.com/embed/xrRDlOWR1OU",
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 24, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],
   [
       'id' => 2,
       'rank' => 1,
       'url' => "https://www.youtube.com/embed/a3ICNMQW7Ok",
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 23, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ],
   [
       'id' => 3,
       'rank' => 2,
       'url' => "https://www.youtube.com/embed/EngW7tLk6R8",
       'title' => "Lorem ipsum dolor sit amet consectetur adipiscing elit",
       'date'   => "October 23, 2024",
       'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
   ]
];
return $items;
}
public function searchJobs(Request $request)
{
    $filters = $request->all();
    // dd( $filters);
    $joblisting = $this->getJobListing($filters); // Filter logic
    // dd($joblisting);
    return view('components.tables.job-listing', compact('joblisting'));

}
// public function getContents(string $module = null, string $submmodule = null, string $contentType = null)
// {
//     $items = DB::table('contents')->where([
//         ['module', '=', $module],
//         ['submodule', '=', $submmodule],
//         ['$contentType','=',$contentType]
//     ])->get();
//     return $items;
// }

public function index() {
 $navList = $this->makeNav();
 $companydetails = $this->getCompanyDetails();
 $carouselcontents = $this->getCarousel();
 $articles = $this->getArticles();
 return view('home', compact('navList','companydetails','carouselcontents','articles'));

}

public function whoweare(){
    $navList = $this->makeNav();
    $christude = $this->getChristude();
    $carouselcontents = $this->getCarousel();
    $carouselmilestone = $this->getMilestone();
    $leaders =$this->getLeaders();
    $awards = $this->getAwards();
    return view('whoweare',compact('navList','christude','carouselcontents','leaders','carouselmilestone','awards'));    
}

public function aboutus(){ 
    $navList = $this->makeNav();    
    $carouselcontents = $this->getCarousel();
    $companyCategory = $this->getCompanyCategory();
    $projectsElanvital = $this->getProjects("Elanvital");
    $projectsExtraordinary = $this->getProjects("Extraordinary");
    $projectsEveryhome = $this->getProjects("Everyhome");
    return view('aboutus',compact('navList','carouselcontents','companyCategory','projectsElanvital','projectsExtraordinary','projectsEveryhome'));    
}
public function news(){
    $navList = $this->makeNav();
    $carouselcontents = $this->getCarousel();
    $newscontents = $this->getContentNews(); 
    $storiescontents = $this->getContentStories(); 
    $videocontents = $this->getContentVideos(); 
    $companydetails = $this->getCompanyDetails();

    return view('news',compact('navList','carouselcontents','newscontents','storiescontents','videocontents','companydetails'));   
}
public function careers(){
    $joblisting = $this->getJobListing();
    $navList = $this->makeNav();
    $carouselcontents = $this->getCarousel();
    $companydetails = $this->getCompanyDetails();
    return view('careers',compact('navList','carouselcontents','companydetails','joblisting'));    
}
public function contacts(){
    $navList = $this->makeNav();
    return view('contacts',compact('navList'));    

}
public function content($contentType,$id){
    // dd($id);
    $navList = $this->makeNav();
    $content = $this->getContentNews($id);

    return view('content',compact('navList','content'));    

}
public function job($id)
{   
    $navList = $this->makeNav();
    $jobDescription= $this->getJobListing(null,$id);
    return view('job',compact('navList','jobDescription'));   
}
public function leaders(){
    // dd($id);
    $navList = $this->makeNav();
    $leaders =$this->getLeaders();

    return view('leaders',compact('navList','leaders'));    

}

public function debugView($viewname){
  return view($viewname);    
}
}

