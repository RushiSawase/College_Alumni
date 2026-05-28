<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Alumni System || About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<style>
/* Custom CSS for Job Section */
/* Job Section for White/Light Theme */
.job-section {
    background: #f9f9f9; /* light gray background */
    padding: 60px 0;
    margin: 40px 0;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

.job-section h3 {
    text-align: center;
    color: #333;
    font-size: 2.2rem;
    margin-bottom: 40px;
    font-weight: 700;
}

.job-stats {
    text-align: center;
    color: #555;
    margin-bottom: 30px;
    font-size: 1.1rem;
    background: #fff;
    padding: 12px 15px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.job-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 25px 30px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border-left: 4px solid #00aaff; /* subtle accent color */
}

.job-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.job-title {
    color: #222;
}

.job-company {
    color: #00aaff; /* accent color for company */
}

.job-meta-item {
    color: #555;
}

.job-description {
    background: #f8f8f8;
    border-left: 3px solid #00aaff;
    color: #555;
}

.apply-btn {
    background: #00aaff; /* matches accent */
    color: #fff;
}

.apply-btn:hover {
    background: #0077cc;
}

/* Job Type Badge */
.job-type {
    background: #e0f7ff;
    color: #0077cc;
}

.job-section h3 {
    text-align: center;
    color: white;
    font-size: 2.5rem;
    margin-bottom: 40px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.job-card {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border-left: 5px solid #667eea;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.job-title {
    color: #333;
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: 600;
    flex: 1;
}

.job-company {
    color: #667eea;
    font-size: 1.1rem;
    font-weight: 500;
}

.job-meta {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin-bottom: 15px;
}

.job-meta-item {
    display: flex;
    align-items: center;
    color: #666;
}

.job-meta-item strong {
    color: #333;
    margin-right: 8px;
    min-width: 120px;
}

.job-description {
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

.job-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-top: 15px;
    border-top: 1px solid #eee;
    gap: 10px;
}

.apply-btn {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.apply-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    color: white;
    text-decoration: none;
}

.job-type {
    background: #e9ecef;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    color: #495057;
}

.loading {
    text-align: center;
    color: white;
    font-size: 1.2rem;
    padding: 40px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.job-stats {
    text-align: center;
    color: white;
    margin-bottom: 30px;
    font-size: 1.1rem;
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.fa {
    margin-right: 8px;
    color: #667eea;
}

.job-card:hover .fa {
    color: #764ba2;
}

/* Responsive Design */
@media (max-width: 768px) {
    .job-section {
        padding: 40px 15px;
        margin: 20px 0;
    }
    
    .job-section h3 {
        font-size: 2rem;
    }
    
    .job-card {
        padding: 20px;
    }
    
    .job-meta {
        grid-template-columns: 1fr;
    }
    
    .job-header {
        flex-direction: column;
    }
    
    .job-footer {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .job-meta-item strong {
        min-width: 100px;
    }
}
</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->
<?php include_once('includes/header.php');?>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Online Jobs</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- About -->


		
			
       <div class="container-fluid" style="background:#f9f9f9; padding:60px 5%; border-radius:0;">

    <h3 style="text-align:center; color:#333; font-size:2.5rem; margin-bottom:50px; font-weight:700; letter-spacing:1px;">
        <i class="fa fa-briefcase" style="color:#007bff; margin-right:10px;"></i> Explore the Latest Career Opportunities
    </h3>

    <?php
    // Fetch live jobs using RapidAPI (JSearch)
    $api_url = "https://jsearch.p.rapidapi.com/search?query=software%20developer%20in%20India&num_pages=1";
    $headers = [
        "X-RapidAPI-Key: f9f698e71bmsh41ef2e395ea3789p1aac4fjsnc849ed3796ea",
        "X-RapidAPI-Host: jsearch.p.rapidapi.com"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200) {
        $data = json_decode($response, true);

        if (!empty($data['data'])) {
            $job_count = count($data['data']);
            echo "<div style='text-align:center; color:#333; background:#e9ecef; padding:15px 20px; border-radius:12px; margin-bottom:35px; display:inline-block; font-size:1.1rem; box-shadow:0 0 10px rgba(0,0,0,0.05);'>
                    <i class='fa fa-chart-line'></i> Found {$job_count} Active Job Listings
                  </div>";

            foreach ($data['data'] as $job) {
                $job_title = htmlspecialchars($job['job_title'] ?? 'Not specified');
                $employer_name = htmlspecialchars($job['employer_name'] ?? 'Not specified');
                $job_city = htmlspecialchars($job['job_city'] ?? 'Not specified');
                $job_country = htmlspecialchars($job['job_country'] ?? 'Not specified');
                $job_apply_link = htmlspecialchars($job['job_apply_link'] ?? '#');
                $job_description = htmlspecialchars($job['job_description'] ?? 'No description available');
                $employment_type = htmlspecialchars($job['job_employment_type'] ?? 'Not specified');

                echo "<div style='background:#f1f3f5; border-radius:12px; padding:25px; margin-bottom:30px; box-shadow:0 8px 20px rgba(0,0,0,0.08); transition:all 0.4s ease; border-left:6px solid #007bff; transform:scale(1);'
                     onmouseover='this.style.transform=\"scale(1.02)\"; this.style.boxShadow=\"0 15px 35px rgba(0,0,0,0.15)\"'
                     onmouseout='this.style.transform=\"scale(1)\"; this.style.boxShadow=\"0 8px 20px rgba(0,0,0,0.08)\"'>
                        <div style='display:flex; justify-content:space-between; flex-wrap:wrap; align-items:flex-start; margin-bottom:15px;'>
                            <div>
                                <h4 style='color:#212529; font-size:1.5rem; font-weight:600; margin-bottom:8px; transition:all 0.3s ease;'
                                    onmouseover='this.style.color=\"#007bff\"'
                                    onmouseout='this.style.color=\"#212529\"'>
                                    <i class='fa fa-briefcase' style='color:#007bff; margin-right:8px;'></i>{$job_title}
                                </h4>
                                <p style='color:#007bff; font-weight:500; font-size:1.1rem; transition:all 0.3s ease;'
                                   onmouseover='this.style.transform=\"translateX(5px)\"'
                                   onmouseout='this.style.transform=\"translateX(0)\"'>
                                    <i class='fa fa-building'></i> {$employer_name}
                                </p>
                            </div>
                            <span style='background:#dee2e6; color:#495057; padding:6px 20px; border-radius:25px; font-size:0.9rem; font-weight:500; margin-top:10px; transition:all 0.3s ease;'
                                  onmouseover='this.style.background=\"#007bff\"; this.style.color=\"white\"'
                                  onmouseout='this.style.background=\"#dee2e6\"; this.style.color=\"#495057\"'>
                                <i class='fa fa-clock-o'></i> {$employment_type}
                            </span>
                        </div>

                        <div style='display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:10px; margin-bottom:15px; color:#495057;'>
                            <div style='transition:all 0.3s ease; padding:8px; border-radius:8px;'
                                 onmouseover='this.style.background=\"#e9ecef\"; this.style.transform=\"scale(1.05)\"'
                                 onmouseout='this.style.background=\"transparent\"; this.style.transform=\"scale(1)\"'><strong><i class='fa fa-map-marker'></i> Location:</strong> {$job_city}, {$job_country}</div>";

                if (!empty($job['job_posted_at_datetime_utc'])) {
                    $posted_date = date('M d, Y', strtotime($job['job_posted_at_datetime_utc']));
                    echo "<div style='transition:all 0.3s ease; padding:8px; border-radius:8px;'
                         onmouseover='this.style.background=\"#e9ecef\"; this.style.transform=\"scale(1.05)\"'
                         onmouseout='this.style.background=\"transparent\"; this.style.transform=\"scale(1)\"'><strong><i class='fa fa-calendar'></i> Posted:</strong> {$posted_date}</div>";
                }

                if (!empty($job['job_offer_expiration_datetime_utc'])) {
                    $expiry_date = date('M d, Y', strtotime($job['job_offer_expiration_datetime_utc']));
                    echo "<div style='transition:all 0.3s ease; padding:8px; border-radius:8px;'
                         onmouseover='this.style.background=\"#e9ecef\"; this.style.transform=\"scale(1.05)\"'
                         onmouseout='this.style.background=\"transparent\"; this.style.transform=\"scale(1)\"'><strong><i class='fa fa-hourglass-end'></i> Apply Before:</strong> {$expiry_date}</div>";
                }

                echo "</div>
                        <div style='background:#e9ecef; padding:15px; border-left:4px solid #007bff; border-radius:10px; color:#495057; margin-bottom:20px; transition:all 0.3s ease;'
                             onmouseover='this.style.background=\"#dee2e6\"; this.style.transform=\"scale(1.01)\"'
                             onmouseout='this.style.background=\"#e9ecef\"; this.style.transform=\"scale(1)\"'>
                            <strong><i class='fa fa-file-text'></i> Job Description:</strong><br>" .
                            (strlen($job_description) > 220 ? substr($job_description, 0, 220) . '...' : $job_description) .
                        "</div>

                        <div style='display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; border-top:1px solid #dee2e6; padding-top:15px; gap:10px;'>
                            <a href='{$job_apply_link}' target='_blank' 
                               style='background:#007bff; color:white; padding:12px 30px; border-radius:25px; text-decoration:none; font-weight:600; transition:all 0.3s ease; box-shadow:0 5px 15px rgba(0,123,255,0.3); display:inline-block;'
                               onmouseover='this.style.transform=\"scale(1.1)\"; this.style.boxShadow=\"0 8px 25px rgba(0,123,255,0.5)\"'
                               onmouseout='this.style.transform=\"scale(1)\"; this.style.boxShadow=\"0 5px 15px rgba(0,123,255,0.3)\"'>
                                <i class='fa fa-external-link'></i> Apply Now
                            </a>";

                if (!empty($job['job_is_remote'])) {
                    echo "<span style='background:#dee2e6; color:#495057; padding:6px 15px; border-radius:25px; font-size:0.9rem; transition:all 0.3s ease; display:inline-block;'
                          onmouseover='this.style.background=\"#28a745\"; this.style.color=\"white\"; this.style.transform=\"scale(1.1)\"'
                          onmouseout='this.style.background=\"#dee2e6\"; this.style.color=\"#495057\"; this.style.transform=\"scale(1)\"'>
                            <i class='fa fa-wifi'></i> Remote Work Available
                          </span>";
                }

                echo "</div>
                    </div>";
            }
        } else {
            echo "<p style='text-align:center; color:#495057; background:#e9ecef; padding:40px; border-radius:15px; font-size:1.2rem; transition:all 0.3s ease;'
                  onmouseover='this.style.transform=\"scale(1.02)\"; this.style.boxShadow=\"0 10px 25px rgba(0,0,0,0.1)\"'
                  onmouseout='this.style.transform=\"scale(1)\"; this.style.boxShadow=\"none\"'>
                    <i class='fa fa-info-circle'></i> No live jobs found at the moment. Please try again later.
                  </p>";
        }
    } else {
        echo "<p style='text-align:center; color:#495057; background:#e9ecef; padding:40px; border-radius:15px; font-size:1.2rem; transition:all 0.3s ease;'
              onmouseover='this.style.transform=\"scale(1.02)\"; this.style.boxShadow=\"0 10px 25px rgba(0,0,0,0.1)\"'
              onmouseout='this.style.transform=\"scale(1)\"; this.style.boxShadow=\"none\"'>
                <i class='fa fa-exclamation-triangle'></i> Unable to fetch job data. Please check your internet connection or try again later.
              </p>";
    }
    ?>
</div>

		
	


	<!-- Job Section -->
	

	<!-- Footer -->
<?php include_once('includes/footer.php');?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
</body>
</html>