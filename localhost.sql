-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2024 at 12:41 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcon_iglweb`
--
CREATE DATABASE IF NOT EXISTS `smartcon_iglweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smartcon_iglweb`;

-- --------------------------------------------------------

--
-- Table structure for table `about_ceos`
--

CREATE TABLE `about_ceos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_ceos`
--

INSERT INTO `about_ceos` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(11, 'Md. Sharfaraz Ahmed', 'ceo_images/S9JRBgV7YTBO53i4f2iVmEXubdK0hTJSUTT4I69q.jpg', 'SMART Consultancy and Development Consortium\r\n-A complete solution for H.R, Administration, Compliance & RMG factory management with Training, Consultancy and Job Placement \r\nas well as \r\nSmall Business Management\r\n\r\nAbout the CEO, Lead Consultant and Founder of this Consortium & Small Businesses \r\n\r\nQualification:\r\n\r\nB.B.A, MBA (D.U), PGDHRM (BIMS), ACHRM (DIU),CESM (U.S.A)ISO14001, SA8000(SAI)Basic (U.S.A),18001Lead Auditor (BD),   C-KPI (Australia), CPP(India),LL.B (N.U) (Cont.)\r\n\r\nMr. Md. Sharfaraz Ahmed, CEO, Lead Consultant and Founder, experiencing 24+ years while working in the RMG industry in the field of Human Resources, Buyer Compliance, Administration and Operations being the Head of the Department, as this industry is the pioneer in Bangladesh.', '2024-07-27 06:12:02', '2024-09-16 07:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `our_vision` text DEFAULT NULL,
  `our_promise` text DEFAULT NULL,
  `our_goal` text DEFAULT NULL,
  `why_different` text DEFAULT NULL,
  `why_choose_us` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `our_vision`, `our_promise`, `our_goal`, `why_different`, `why_choose_us`, `created_at`, `updated_at`) VALUES
(5, '<p><i><strong>Vision: </strong></i>To be the pioneer in the consultancy, training &amp; factory development services specializing in the 100% Exported Oriented RMG and manufacturing industries as well as to be the number one in Bangladesh managing the online businesses. Through our One-Stop services, we are your Professional Partner!</p><p><i><strong>Mission:&nbsp;</strong></i>We are a professional, enthusiastic, experienced and innovative team, dedicated to providing professional Consulting Services and evolving Recruitment Solutions, Training, Documentations that help our customers to become more productive and profitable in the manufacturing industry specially the 100% Export Oriented RMG and to set as well as to operate the small businesses successfully.</p>', '<ul><li><i>Superior customer value</i></li><li><i>Confidentiality</i></li><li><i>Integrity, efficiency, reliability</i></li><li><i>Timely delivery</i></li><li><i>Quality service.</i></li><li><i>We never compromise on Quality and Just-in-Time.</i></li></ul><p>&nbsp;</p>', '<p>This is the first `Our Goal and KPI Status`</p>', '<p>&nbsp;</p><p><i>We cannot change our genes or our past, we can control how we react to them. We can choose to be positive and optimistic, or negative and pessimistic. Ultimately, it is up to us to create our own unique identity and to be the best person we can be. Believing on this, we create our own unique services for our customers in a customized format.</i></p>', '<p>&nbsp;</p><p>As a co-partner for your problem-solving needs and the required services you wish to get from your consultant and/or linked with the expert to decide for the specific problem to operate the business of 100% Exported Oriented Ready-Made Garments as well as to run the Small Businesses as a retailer in the market specially on digital platform and the Officers who want to get required skill and training to join this industry and/or already joined but want to develop further.</p>', '2024-07-15 00:02:55', '2024-09-18 23:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `link`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sajal', 'https://www.nga.org.uk/membership/', 'images/6hP3gJXXjPAovb3RPrL1m4hsAztsikZTlfCnDz7Y.jpg', NULL, '2024-07-15 00:31:04', '2024-07-15 00:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `phone_number`, `email`, `address`, `map`, `created_at`, `updated_at`) VALUES
(3, '01923690880, 01733313397', 'smartconsortiumconsultancy24@gmail.com', '309, lalbagh Road, Lalbagh, Dhaka', NULL, '2024-07-15 02:53:57', '2024-09-26 19:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_teacher_name` varchar(255) NOT NULL,
  `course_teacher_image` varchar(255) DEFAULT NULL,
  `course_price` decimal(10,2) NOT NULL,
  `course_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `start_date` date DEFAULT NULL,
  `deadline_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_teacher_name`, `course_teacher_image`, `course_price`, `course_description`, `created_at`, `updated_at`, `start_date`, `deadline_date`) VALUES
(10, 'test2', 'sajal', '1724758539.jpg', 500.00, 'dsadfsa', '2024-08-27 11:35:39', '2024-08-27 11:35:39', '2024-08-28', '2024-08-30'),
(11, 'fgds', 'dfs', '1724758588.png', 5000.00, 'gfsd', '2024-08-27 11:36:28', '2024-08-27 11:36:28', '2024-08-28', '2024-08-29'),
(12, 'test', 'Md. Sharfaraz', '1727444018.png', 5000.00, 'for test', '2024-09-27 07:33:38', '2024-09-27 07:33:38', '2024-09-28', '2024-11-14'),
(13, 'test', 'Md. Sharfaraz', '1727444058.png', 6000.00, 'tesst', '2024-09-27 07:34:18', '2024-09-27 07:34:18', '2024-09-27', '2024-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `course_files`
--

CREATE TABLE `course_files` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_tutorials`
--

CREATE TABLE `course_tutorials` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cover_images`
--

CREATE TABLE `cover_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cover_images`
--

INSERT INTO `cover_images` (`id`, `page_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Home', 'upload/cover-images/23459.jpg', '2024-07-27 00:38:50', '2024-09-20 07:59:50'),
(3, 'About Us', 'upload/cover-images/46876.jpg', '2024-07-27 00:42:13', '2024-07-27 00:42:13'),
(4, 'Job Opportunities', 'upload/cover-images/21591.jpg', '2024-07-27 08:48:55', '2024-07-27 09:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `employers_corners`
--

CREATE TABLE `employers_corners` (
  `id` int(11) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `short_video_resume` varchar(255) DEFAULT NULL,
  `detailed_video_resume` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers_corners`
--

INSERT INTO `employers_corners` (`id`, `cv`, `short_video_resume`, `detailed_video_resume`, `created_at`, `updated_at`) VALUES
(12, 'upload/employers-corner-files/23332.pdf', 'https://drive.google.com/file/d/1lu8ufPzBXK-WT_wniRBL6wyqMCY9o7oh/view?usp=sharing', 'https://drive.google.com/file/d/16WOcUppDkMY35BpPgWV-XVsNsxuFcZTx/view?usp=sharing', '2024-09-20 07:49:48', '2024-09-29 21:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'Why An FAQ Resource?', 'Firstly, FAQ pages can bring new visitors to your website via organic search and drive them quickly to related pages – most typically deeper blog pages and service pages closely related to the questions being resolved.\r\n\r\nNext, one of the most significant opportunities for impactful brand visibility within the search engine result pages (in-SERP) is targeting audience questions, wants, needs, and pain points.\r\n\r\nThe FAQ page is one of the best ways to help people visit your site and get snippets of answers in front of users before they click any results within the search pages.\r\n\r\nA helpful FAQ page (more likely an FAQ hub of core pages and topical intent) shortens the time it takes for people to solve their search requirements.', '2024-07-29 05:02:10', '2024-07-29 05:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `job_applicants`
--

CREATE TABLE `job_applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `job_id` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `expected_salary` decimal(10,2) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applicants`
--

INSERT INTO `job_applicants` (`id`, `name`, `email`, `phone`, `job_id`, `experience`, `expected_salary`, `resume`, `created_at`, `updated_at`) VALUES
(2, 'sajal5454', 'fazlerabbi.igl@gmail.com', '01965838328', 5, 5, 10000.00, 'storage/resumes/7aFAElx8lOc5ElVqH8eUWnuZ3FcfZjUVPibCj0XQ.pdf', '2024-09-22 23:45:29', '2024-09-22 23:45:29'),
(3, 'king', 'king@gmail.com', '01965838328', 5, 0, 545454.00, 'storage/resumes/0facnOJ19AajKhzbvZuKAnVYNlAVfZB67ClhW5Tb.pdf', '2024-09-22 23:53:59', '2024-09-22 23:53:59'),
(4, 'Test', 'test@gmail.com', '01965838328', 5, 0, 5000.00, 'storage/resumes/rtVM32gDZg8VILDBW5SPrIlU2OMDR38Lp5bd031W.pdf', '2024-09-22 23:59:08', '2024-09-22 23:59:08'),
(5, 'dfa', 'king2@gmail.com', '01965838328', 5, 6, 6000.00, 'storage/resumes/zkQxKDQDD4Jps1V4l5KHsOvMxH1T4IeUn8KKr3FV.pdf', '2024-09-23 00:01:40', '2024-09-23 00:01:40'),
(6, 'sajal', 'errorsajal@gmail.com', '01965838328', 3, 2, 400000.00, 'storage/resumes/lZ2xkzbJCLofClfV4wPawO6Rd0AE7OJOzTTjxyNJ.pdf', '2024-09-27 07:04:14', '2024-09-27 07:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `job_opportunities`
--

CREATE TABLE `job_opportunities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `published_on` date DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `salary` varchar(500) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `vacancy` int(11) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_opportunities`
--

INSERT INTO `job_opportunities` (`id`, `title`, `published_on`, `experience`, `salary`, `deadline`, `job_type`, `description`, `image`, `vacancy`, `location`, `created_at`, `updated_at`) VALUES
(3, 'Junior Business Analyst', NULL, '2-3 years', '100000', '2024-07-31', 'Full Time', '<p><strong>Job responsibilities:</strong></p><p><strong>Requirement Gathering:</strong></p><ul><li>Collaborate with stakeholders to understand business objectives and gather detailed requirements.</li><li>Conduct a thorough analysis of business processes to identify areas for improvement and optimization.</li></ul><p><strong>Data Analysis:</strong></p><ul><li>Utilize statistical methods and tools to analyze large datasets, extract meaningful insights, and generate actionable recommendations.</li><li>Develop and maintain dashboards and reports to monitor key performance indicators (KPIs) and track business performance.</li></ul><p><strong>Documentation:</strong></p><ul><li>Create detailed documentation of business requirements, process flows, and functional specifications.</li><li>Ensure clear communication and understanding between business stakeholders and the development team.</li></ul><p><strong>Collaboration:</strong></p><ul><li>Work closely with cross-functional teams including development, QA, and project management to ensure successful project delivery.</li><li>Facilitate communication between business and technical teams, translating business needs into technical requirements.</li></ul><p><strong>Strategic Planning:</strong></p><ul><li>Contribute to the development of business strategies by providing insights and recommendations based on data analysis.</li><li>Participate in strategic planning sessions to align business objectives with technology solutions.</li></ul><p><strong>Continuous Improvement:</strong></p><ul><li>Identify opportunities for process improvements and efficiency gains within the organization.</li><li>Stay abreast of industry trends and best practices to recommend and implement innovative solutions.</li></ul><p><strong>Educational requirements:</strong></p><ul><li>Graduation / Post Graduate or university degree in the field of computer science / Information Technology /MIS/ Business</li></ul><p><strong>Experience requirements:</strong></p><ul><li>Strong analytical and problem-solving skills.</li><li>Excellent communication and interpersonal skills.</li><li>Proficient in data analysis tools and techniques.</li><li>Familiarity with project management methodologies is a plus.</li></ul><p><strong>Additional Skills:</strong></p><ul><li>Ability to adapt to a fast-paced and dynamic work environment.</li><li>Strong organizational skills and attention to detail.</li><li>Hard-working ability &amp; pressure-taking mentality.</li><li>Experience in the IT sector is a plus.</li></ul><p><strong>Benefits:</strong></p><ul><li>Yearly 2 times Salary Reviews/Increment</li><li>Weekly 2 Holidays</li><li>Monthly Project Bonus</li><li>Yearly 22 Paid Leaves</li><li>Weekly Session</li><li>Lunch, coffee &amp; snacks</li><li>Overtime Allowance</li><li>100% Festival Bonus</li><li>Medical Allowance</li><li>Yearly Tax Return</li></ul><p><strong>Location :</strong></p><p>Dhanmondi 4</p>', 'job_opportunities/yZuuQ2cuDnQN7J9tWgQSUws9vZyNwpUrgaJodDC5.jpg', 5, 'Dhanmondi', '2024-07-29 00:12:48', '2024-07-29 00:12:48'),
(4, 'Technical Project Manager', NULL, '2-3 years', 'BDT 50000-65000 depending on experience', '2024-07-31', 'Full Time', '<p><strong>Job responsibilities:</strong></p><ul><li>Plan and oversee the execution of all phases of software development projects, particularly SaaS and CRM systems, from initial concept through design, deployment, and final delivery.</li><li>Lead and manage teams of 10 or more members, fostering a collaborative, productive, and inclusive environment.</li><li>Analyze requirements and develop technical solutions.</li><li>Conduct feasibility studies on various requirements.</li><li>Participate in the preparation of technical proposals and effort estimation.</li><li>Provide high-level architectural direction and review architectural implementations across projects.</li><li>Identify and shortlist options to standardize application development within the organization.</li><li>Create, define, or select the optimal framework for software application development.</li><li>Recognize and develop potential reuse opportunities within the organization or across applications.</li><li>Design and develop various prototypes for reuse in different projects.</li><li>Stay updated with industry developments and incorporate them into company programs.</li></ul><p><strong>Educational requirements:</strong></p><ul><li>Bachelor of Science (BSc) in CSE</li><li>Educational qualification is not a major factor if the candidate is a performer.</li></ul><p><strong>Experience requirements:</strong></p><ul><li>4+ years of professional experience, with a deep understanding of Web Technologies.</li><li>Extensive experience in project estimation, planning, designing, management, and deployment.</li><li>Practical experience in design documentation, including UML, DFD, CFD, and system architecture.</li><li>Advanced knowledge in shell scripting within a LINUX environment.</li><li>Profound knowledge of core PHP, Python/NodeJS/Java, JavaScript, HTML, CSS.</li><li>Expertise in frameworks such as Laravel, Django/ExpressJS/Spring, ReactJS, and CSS preprocessors like Sass/LESS.</li><li>Experience in designing, implementing, and using RESTful Web Services with a Service-Oriented Architecture.</li><li>Experience with various testing frameworks.</li></ul><p><strong>Additional requirements:</strong></p><ul><li>Nice to have experience in software estimation methods like Function Points, Use Case Points.</li><li>Nice to have experience in software testing, including test case design, execution, and documentation.</li><li>Nice to have experience with AWS/GCP cloud services.</li></ul><p><strong>Benefits:</strong></p><ul><li>Salary review Yearly</li><li>Weekly 2 Holidays</li><li>Monthly Project Bonus</li><li>Yearly 21 Paid Leaves</li><li>Weekly Session</li><li>Coffee &amp; snacks</li><li>100% Festival Bonus</li><li>Medical Allowance</li><li>Yearly Tax Return</li></ul><p><strong>Location</strong></p><p>Dhanmondi</p>', 'job_opportunities/mFgHi25U2SAAGXbDAWVG9epSaCv5DlZK5nUxQUtF.jpg', 5, 'Dhanmondi', '2024-07-29 00:17:10', '2024-07-29 00:18:22'),
(5, 'we', NULL, 'sdsa sadasd', '43434', '2024-09-20', 'dsdasdsa', '<p>gfxgf gfdgfdghdf hgd ghdf ghd ghd ghdf ghd ghd gfd ghd hgf</p>', 'job_opportunities/PMqy8xdIdYwcnROGQS70OrbYR6sTO2AbhmassBw5.jpg', 34, 'sd asdsa sad sdasd sa dsad asd sa', '2024-09-19 00:41:10', '2024-09-19 00:41:10'),
(7, 'fdsa', NULL, '5', '4535', '2024-09-20', 'Full Time', '<p>dfsa</p>', 'job_opportunities/oMLygPTfeJutEssCpRwlyU0ayvz5ZIG6sVVMQDKb.jpg', 5, 'Dhanmondi', '2024-09-19 03:47:04', '2024-09-19 03:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `membership_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `membership_type`, `status`, `price`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 6000.00, '2024-08-27 23:44:17', '2024-08-28 00:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `course_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 'dasfdsa', '2024-08-27 03:17:15', '2024-08-27 03:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_14_103653_create_about_ceos_table', 2),
(6, '2024_07_15_045003_create_team_table', 3),
(7, '2024_07_15_052331_create_achievements_table', 4),
(8, '2024_07_15_061643_create_clients_table', 5),
(9, '2024_07_15_063905_create_contact_us_table', 6),
(10, '2024_07_15_092750_create_product_and_services_table', 7),
(11, '2024_07_15_095719_create_job_opportunities_table', 8),
(12, '2024_07_15_110905_add_title_to_job_opportunities_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'First', '<p>start</p>', 'upload/news-images/10206.jpg', '2024-07-27 04:24:36', '2024-09-21 00:08:33'),
(4, 'Apex Legends', 'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. It was released for PlayStation 4, Windows, and Xbox One in February 2019, for Nintendo Switch in March 2021, and for PlayStation 5 and Xbox Series X/S in March 2022. A mobile version of the game designed for touchscreens titled Apex Legends Mobile was released in May 2022 on Android and iOS. The game supports cross-platform play, excluding the aforementioned mobile platforms.\r\n\r\nBefore the match, players form into two- or three-player squads, and select from pre-designed characters with distinctive abilities, known as \"Legends\". The game has three gameplay modes - Trios, Duos and Solos. In \"Battle Royale\", up to 20 three-person squads or 30 two-person duos land on an island and search for weapons and supplies before attempting to defeat all other players in combat.', 'upload/news-images/21346.jpg', '2024-07-27 05:15:03', '2024-07-27 23:09:17'),
(5, 'Armored Core VI', '<p><i><strong>Armored Core VI: Fires of Rubicon</strong></i>[a] is a 2023 mecha-based vehicular combat game developed by FromSoftware and published by Bandai Namco Entertainment. It is another reboot of the series, set in a distant future on a remote planet where a war erupts between corporations, the government and the local residents for the control of a rare and valuable resource only available there.</p><p>The game is the first entry in the <i>Armored Core</i> series since <i>Armored Core: Verdict Day</i> (2013) and was released for PlayStation 4, PlayStation 5, Windows, Xbox One, and Xbox Series X/S on August 25. It received generally positive reviews from critics and is the highest-selling entry in the series, selling three million copies by July 2024.</p>', 'upload/news-images/38710.jpeg', '2024-07-27 23:16:26', '2024-07-28 00:22:11'),
(6, 'Preparation', '<p><strong>How to start business</strong></p>', 'upload/news-images/33507.jpg', '2024-09-21 00:13:41', '2024-09-21 00:13:41'),
(7, 'test', '<p>test</p>', 'upload/news-images/12570.jpeg', '2024-09-21 00:16:19', '2024-09-21 00:16:19'),
(8, 'Test News by Reza', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit mollis cubilia, volutpat nostra vulputate facilisis ligula fermentum risus augue, magnis morbi tincidunt nullam hendrerit lacus fringilla parturient. Netus purus ac pretium placerat posuere tortor sem congue egestas, sodales eros montes ridiculus imperdiet taciti habitant conubia suspendisse</p>', 'upload/news-images/49646.jpeg', '2024-09-21 00:17:51', '2024-09-21 00:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` int(11) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `photo_url`, `caption`, `created_at`, `updated_at`) VALUES
(6, 'photos/iyleLgMP4oL9b5knyHkTSmQNuN8Phoqcvsnfd7vO.jpg', 'Start of the journey of the CEO of SMART Consortium at the University of Dhaka, during the year session of 1995-96', '2024-09-21 06:41:11', '2024-09-21 08:18:54'),
(7, 'photos/dDYqiIHjAgKXajEZwvheNbDJXsg3wXJ2Qn8T0Qbb.jpg', 'CEO of SMART Consortium at the front gate of ART Building of the University of Dhaka', '2024-09-21 06:42:54', '2024-09-21 06:42:54'),
(8, 'photos/ZGxdOEN4GZPfzVYjDQYmKJd3pt6nxinvxUsvKrLC.jpg', 'CEO at the front side Modhur Canteen during the year session of 1995-96', '2024-09-21 07:11:28', '2024-09-21 07:11:28'),
(9, 'photos/uVrYkCh3MCL6m686dngTH8wDWMt2xERve705FWRy.jpg', 'CEO with a team work at Modhur Canteen during the year session of 1995-96, Dhaka University', '2024-09-21 07:12:45', '2024-09-21 07:12:45'),
(10, 'photos/nfMeiolHeWjUzz3MI0nz4Q9xmJtFFfCTpasIL3kk.jpg', 'CEO working in the group discussion during the year session of 1995-96 at the University of Dhaka', '2024-09-21 07:14:38', '2024-09-21 07:14:38'),
(11, 'photos/b9gXKbbIT0lieppSz75mAf0ukOa0qhy1cwWWic7F.jpg', 'CEO at the completion session of MBA-2nd Batch in the year 2003 from the University of Dhaka', '2024-09-21 07:17:06', '2024-09-21 07:17:06'),
(12, 'photos/kasjwdv9VuxFUGUuGJiAwhWCnqNv3vv4RLppvwjz.jpg', 'CEO memorizing the memory of 42nd convocation of the University of Dhaka', '2024-09-21 07:19:08', '2024-09-21 07:19:08'),
(13, 'photos/niZtXcRTQHszSK7r8L6v9CurxVUN4twyiiDUat2z.jpg', 'CEO memorizing the memory of 42nd convocation of the University of Dhaka', '2024-09-21 07:20:33', '2024-09-21 07:20:33'),
(14, 'photos/XR2IzOffgalGGLf6s93Chx6D5KOqaZvvLDJ2eSUT.jpg', 'CEO memorizing the memory of 42nd convocation of the University of Dhaka', '2024-09-21 07:20:55', '2024-09-21 07:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_and_services`
--

CREATE TABLE `product_and_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_and_services`
--

INSERT INTO `product_and_services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(14, '1.	Documentation and Policy Development', '<p><i><strong>Policy development and help for the Strategic Decision-making process related with Human Resources Management. We give the solution and develop the required formats and reports for Human Resources, Administration and Compliance departments’, all necessary requirements and place the same with the systematic approach to make it a success as per ISO Standard.&nbsp;</strong></i></p>', 'images/1727417921.jpg', '2024-09-27 00:18:41', '2024-09-27 00:18:41'),
(15, '2.	Structuring & Restructuring of the Manpower', '<p><i><strong>We do analyze of H.R, Admin and Compliance Department’s Officers’ job with specific Job Description for the 100% employee engagement along with this for the entire organization, the same way, we help the organization for the maximum utilization of the manpower and ensure the industry standard payroll cost controlled.</strong></i></p>', 'images/1727418226.jpg', '2024-09-27 00:23:46', '2024-09-27 00:23:46'),
(16, '3.	Job Placement for the Officers', '<p><i><strong>The competent Officers, Managers and Senior Management employee as suitable for the customer for H.R, Administration and Compliance department in the RMG industry or for other manufacturing industries from our wide ranges of references of the different associations and database, we have with us, we help to fill the position.</strong></i></p>', 'images/1727431909.jpg', '2024-09-27 04:11:49', '2024-09-27 04:11:49'),
(17, '4.	Skilled Workers accommodation', '<p><i><strong>With the help of the Head Hunter at the field level we accommodate the skilled workers particularly the Operators for RMG industry.</strong></i></p>', 'images/1727431970.jpg', '2024-09-27 04:12:50', '2024-09-27 04:12:50'),
(18, '5.	RMG Training School', '<p><i><strong>We, all know that our BD RMG industry is suffering from the shortages of trained, skilled workforces. We Plan, Develop, and Implement with Structural &amp; Architectural design requirement analysis for the required work forces particularly for the Operators to give them required training and within fifteen days’ time we are capable to make the fresh Asst. Operators to get the 65% efficiency level for the minimum to start at production floor shop.</strong></i></p>', 'images/1727432037.jpg', '2024-09-27 04:13:57', '2024-09-27 04:13:57'),
(19, '6.	Suggestion and Development of the requirement for International Certification', '<ol><li><strong>BSCI:</strong> We help the organization to understand the critical requirements and develop the factory to get the certification with the required documents and process.</li><li><strong>WRAP:&nbsp;</strong>We help the organization to understand the critical requirements and develop the factory to get the certification with the required documents and process.</li><li><strong>Series of ISO:</strong> Especially OHSAS-45001-2018, 14001, etc. we do prepare the company for such certification required.</li><li><strong>C-TPAT:&nbsp;</strong>GSV or specific U.S buyer COC on C-TPAT. We provide all out support for the implementation of the facility to get the certificate.&nbsp;</li><li><strong>GOTS, OCS, GRS, RCS, SBTi :</strong> Organizing and implementation of the documents and procedure for the certification.</li></ol>', 'images/1727432103.jpg', '2024-09-27 04:15:03', '2024-09-27 04:15:03'),
(20, '7.	Training to the Mid-Level Management Staffs', '<p><i><strong>In the manufacturing industry, specially the kind of labor intensive RMG, with the help of this module, we give rigorous and continuous training model and help to set the system in the organization so that the continual development of the Mid-Level Employees can happen.&nbsp;</strong></i></p>', 'images/1727432170.jpg', '2024-09-27 04:16:10', '2024-09-27 04:16:10'),
(21, '8.	Documentation on Awareness Training', '<p><i><strong>Training Need Assessment (TNA), Contents Development, Training Plan, Scheduling and Documentation development as per customers’ or customized requirement.</strong></i></p>', 'images/1727432239.jpg', '2024-09-27 04:17:19', '2024-09-27 04:17:19'),
(22, '9.	Payroll Structuring and Establishment of Payroll System as per Tree', '<p><i><strong>After establishing the Tree, we develop the required formats for the management decision making reports, personal file development and management system development, required registers and documents for the payroll to face any kind of audits having no critical wages issue in the report, which boost the organization to keep the business risk free.&nbsp;</strong></i></p>', 'images/1727432299.jpg', '2024-09-27 04:18:19', '2024-09-27 04:18:19'),
(23, '10.	Advice on Settlement of Labor Court Related Issues', '<p><i><strong>Guide and resolve the issues related with Labor court and the workforces based on the grievances or complaints case to case.</strong></i></p>', 'images/1727432360.jpg', '2024-09-27 04:19:20', '2024-09-27 04:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Facebook', 'https://www.facebook.com/smartconsortium24', 'upload/social-link-images/15708.jpg', '2024-07-16 00:40:55', '2024-09-26 18:50:31'),
(5, 'Youtube', 'http://www.youtube.com/@smartconsortium', 'upload/social-link-images/15482.jpg', '2024-07-16 05:19:04', '2024-09-15 23:25:22'),
(6, 'Linkedin', 'https://www.linkedin.com/in/smart-consortium-consultancy-small-business-development', 'upload/social-link-images/15242.png', '2024-09-26 18:54:01', '2024-09-29 21:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(2, 'jkljhgfdasdfghjkjjhgfghjkllk', 'fgjhgfdsafkljhgfdsfghjkl', 'images/Q6Rjcg6pWuxUfwtp7SPpwgZkdVspWfQwvrwTjghs.jpg', '2024-07-14 23:15:09', '2024-07-14 23:15:09'),
(6, 'Ajay Ghosh', 'Software Enginee', 'images/XdswvZdJFX6d4kHn9Q3qgSqZf8GJDvPCI3KMWRqK.jpg', '2024-09-19 03:41:12', '2024-09-19 03:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `title`, `date`, `image`, `location`, `video`, `created_at`, `updated_at`) VALUES
(4, 'Inauguration Ceremony', '2024-08-14', NULL, 'Gazipur', NULL, '2024-08-03 07:41:33', '2024-08-03 07:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) DEFAULT 'user' COMMENT '1=root,2=members,3=learners',
  `status` tinyint(1) DEFAULT NULL,
  `membership_id` bigint(20) UNSIGNED DEFAULT NULL,
  `membership_start_date` date DEFAULT NULL,
  `membership_end_date` date DEFAULT NULL,
  `course_id` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `status`, `membership_id`, `membership_start_date`, `membership_end_date`, `course_id`, `address`, `city`, `state`, `postal_code`, `website`, `phone_number`, `profile_image`, `bio`) VALUES
(1, 'Md. Sharfaraz', 'Ahmed', 'smartconsortiumconsultancy24@gmail.com', NULL, '$2y$10$mvJN0Oh4MhwMpHYGERoBMewBz3W35XKth60NeIRlkC.AZUv5Ryh2u', NULL, NULL, '2024-09-26 19:52:07', '1', 0, NULL, NULL, NULL, NULL, '309, lalbagh Road, Lalbagh, Dhaka', 'Dhaka, Bangladesh', NULL, '1212', 'https://smartconsortiumconsultancy.com', '01923690880', 'upload/profile_images/1726460963.jpg', 'This is the digital platform for the freshers and the officers who have joined newly in the 100% RMG industry.'),
(2, 'sajal', 'khan', 'sohanhaque975@gmail.com', NULL, '$2y$10$91LqO7iLDcvq4WKzC3w6rOLTYXeEfoTE6.Givc.9hKg36pHNGou7.', NULL, '2024-08-26 00:27:59', '2024-08-26 00:27:59', '3', NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'dsfa', 'fsadfdsa', 'sohanhaque976@gmail.com', NULL, '$2y$10$91LqO7iLDcvq4WKzC3w6rOLTYXeEfoTE6.Givc.9hKg36pHNGou7.', NULL, '2024-08-26 00:31:18', '2024-08-26 00:31:18', '3', NULL, NULL, NULL, NULL, '10,11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'fazle', 'rabbi', 'king@gmail.com', NULL, '$2y$10$BRZPYR4fbx7dlKJfSB7MXe7OnmRhprE73/lDHfYJkJXgKMteVJwuO', NULL, '2024-08-27 23:12:46', '2024-08-27 23:12:46', '2', 1, 1, '2024-08-28', '2024-08-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ajay', 'ghosh', 'ajay@gmail.com', NULL, '$2y$10$zVHfoJMLf8d0W4z7kZ51s.cpnraWxLMD0kZ90G/S07ebTnDz9xa82', NULL, '2024-08-27 23:44:45', '2024-08-27 23:44:45', '2', 1, 5, '2024-08-30', '2024-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Fazle', 'Rabbi', 'errorsajal@gmail.com', NULL, '$2y$10$kZU6IKJXuoYCPOYzkmR4puVG8Fdz29Jbk5AF5CgTs/YxZLOA7k18a', NULL, '2024-09-21 00:26:15', '2024-09-21 00:27:27', '2', 1, 5, '2024-09-22', '2024-09-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'upload/profile_images/1726900047.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `video_url`, `video_thumbnail`, `caption`, `created_at`, `updated_at`) VALUES
(8, 'https://youtu.be/pOWXGAtbFOE', 'https://img.youtube.com/vi/pOWXGAtbFOE/0.jpg', 'Explanation of SMART Consortium Introductory Contents', '2024-09-22 03:54:31', '2024-09-22 03:54:31'),
(9, 'https://youtu.be/cX1DMB1mImU?si=lSPS3Hrlu1V1FZOc', 'https://img.youtube.com/vi/cX1DMB1mImU/0.jpg', 'Introduction of SMART Consortium', '2024-09-26 18:59:57', '2024-09-26 18:59:57'),
(10, 'https://youtu.be/krNi8KU-pSE', 'https://img.youtube.com/vi/krNi8KU-pSE/0.jpg', 'Introduction of SMART Consortium (English)', '2024-09-26 19:01:44', '2024-09-26 19:01:44'),
(11, 'https://youtu.be/tR7inqCFthI', 'https://img.youtube.com/vi/tR7inqCFthI/0.jpg', 'Explanation of SMART Consortium (English)', '2024-09-26 19:03:30', '2024-09-26 19:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(1, '66.249.79.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 08:11:13', '2024-09-21 08:11:13', '2024-09-21 08:11:13'),
(2, '59.153.103.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-21 08:11:14', '2024-09-21 08:11:14', '2024-09-21 08:11:14'),
(8, '66.249.79.6', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 08:14:41', '2024-09-21 08:14:41', '2024-09-21 08:14:41'),
(9, '66.249.79.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 08:16:13', '2024-09-21 08:16:13', '2024-09-21 08:16:13'),
(10, '103.80.2.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-21 08:16:58', '2024-09-21 08:16:58', '2024-09-21 08:16:58'),
(11, '66.249.79.5', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 08:17:14', '2024-09-21 08:17:14', '2024-09-21 08:17:14'),
(12, '66.249.79.5', 'Googlebot-Image/1.0', '2024-09-21 08:33:29', '2024-09-21 08:33:29', '2024-09-21 08:33:29'),
(13, '87.236.176.84', NULL, '2024-09-21 08:33:29', '2024-09-21 08:33:29', '2024-09-21 08:33:29'),
(14, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-21 08:36:13', '2024-09-21 08:36:13', '2024-09-21 08:36:13'),
(15, '128.90.141.15', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-21 08:36:32', '2024-09-21 08:36:32', '2024-09-21 08:36:32'),
(16, '66.249.79.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 08:37:52', '2024-09-21 08:37:52', '2024-09-21 08:37:52'),
(17, '66.249.79.5', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 08:54:41', '2024-09-21 08:54:41', '2024-09-21 08:54:41'),
(18, '128.90.141.15', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-21 08:58:15', '2024-09-21 08:58:15', '2024-09-21 08:58:15'),
(19, '66.249.68.7', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 08:59:02', '2024-09-21 08:59:02', '2024-09-21 08:59:02'),
(20, '178.128.193.173', NULL, '2024-09-21 09:10:25', '2024-09-21 09:10:25', '2024-09-21 09:10:25'),
(21, '87.236.176.114', NULL, '2024-09-21 09:12:37', '2024-09-21 09:12:37', '2024-09-21 09:12:37'),
(22, '68.183.78.62', 'Go-http-client/1.1', '2024-09-21 09:12:38', '2024-09-21 09:12:38', '2024-09-21 09:12:38'),
(23, '161.35.79.149', NULL, '2024-09-21 09:12:38', '2024-09-21 09:12:38', '2024-09-21 09:12:38'),
(24, '161.35.70.41', NULL, '2024-09-21 09:12:39', '2024-09-21 09:12:39', '2024-09-21 09:12:39'),
(25, '167.71.62.129', NULL, '2024-09-21 09:12:39', '2024-09-21 09:12:39', '2024-09-21 09:12:39'),
(26, '167.172.160.194', NULL, '2024-09-21 09:12:39', '2024-09-21 09:12:39', '2024-09-21 09:12:39'),
(27, '68.183.67.238', NULL, '2024-09-21 09:12:39', '2024-09-21 09:12:39', '2024-09-21 09:12:39'),
(28, '68.183.67.238', 'Mozilla/5.0 (compatible; Odin; https://docs.getodin.com/)', '2024-09-21 09:12:40', '2024-09-21 09:12:40', '2024-09-21 09:12:40'),
(29, '66.249.79.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 09:12:49', '2024-09-21 09:12:49', '2024-09-21 09:12:49'),
(30, '209.97.152.248', NULL, '2024-09-21 09:14:31', '2024-09-21 09:14:31', '2024-09-21 09:14:31'),
(31, '142.93.191.98', NULL, '2024-09-21 09:14:31', '2024-09-21 09:14:31', '2024-09-21 09:14:31'),
(32, '66.249.79.3', 'Googlebot-Image/1.0', '2024-09-21 09:20:07', '2024-09-21 09:20:07', '2024-09-21 09:20:07'),
(33, '66.249.68.1', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 09:23:02', '2024-09-21 09:23:02', '2024-09-21 09:23:02'),
(34, '66.249.79.4', 'Googlebot-Image/1.0', '2024-09-21 09:32:26', '2024-09-21 09:32:26', '2024-09-21 09:32:26'),
(35, '66.249.68.1', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 09:34:41', '2024-09-21 09:34:41', '2024-09-21 09:34:41'),
(36, '66.249.68.8', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 09:36:55', '2024-09-21 09:36:55', '2024-09-21 09:36:55'),
(37, '59.153.103.233', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', '2024-09-21 10:08:32', '2024-09-21 10:08:32', '2024-09-21 10:08:32'),
(38, '51.81.46.212', NULL, '2024-09-21 10:09:20', '2024-09-21 10:09:20', '2024-09-21 10:09:20'),
(39, '66.249.68.7', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 10:13:15', '2024-09-21 10:13:15', '2024-09-21 10:13:15'),
(40, '167.71.199.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-21 10:37:32', '2024-09-21 10:37:32', '2024-09-21 10:37:32'),
(41, '52.167.144.225', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-21 10:49:29', '2024-09-21 10:49:29', '2024-09-21 10:49:29'),
(42, '104.209.34.203', NULL, '2024-09-21 10:59:47', '2024-09-21 10:59:47', '2024-09-21 10:59:47'),
(43, '45.156.128.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '2024-09-21 11:10:08', '2024-09-21 11:10:08', '2024-09-21 11:10:08'),
(44, '66.249.68.8', 'Googlebot-Image/1.0', '2024-09-21 11:13:13', '2024-09-21 11:13:13', '2024-09-21 11:13:13'),
(45, '93.158.91.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2024-09-21 11:34:12', '2024-09-21 11:34:12', '2024-09-21 11:34:12'),
(46, '66.249.68.8', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 11:40:02', '2024-09-21 11:40:02', '2024-09-21 11:40:02'),
(47, '66.249.69.166', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-21 11:51:17', '2024-09-21 11:51:17', '2024-09-21 11:51:17'),
(48, '59.153.103.233', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-21 12:05:35', '2024-09-21 12:05:35', '2024-09-21 12:05:35'),
(49, '45.84.89.2', NULL, '2024-09-21 12:11:31', '2024-09-21 12:11:31', '2024-09-21 12:11:31'),
(50, '87.236.176.126', NULL, '2024-09-21 12:23:42', '2024-09-21 12:23:42', '2024-09-21 12:23:42'),
(51, '5.188.62.26', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4758.11 Safari/537.36', '2024-09-21 12:32:28', '2024-09-21 12:32:28', '2024-09-21 12:32:28'),
(52, '103.106.104.84', 'Mozilla/5.0 (Macintosh;                 Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML,                 like Gecko) Chrome/39.0.2171.95 Safari/537.36', '2024-09-21 12:40:07', '2024-09-21 12:40:07', '2024-09-21 12:40:07'),
(53, '176.53.217.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-21 13:12:40', '2024-09-21 13:12:40', '2024-09-21 13:12:40'),
(54, '176.53.223.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-21 13:12:44', '2024-09-21 13:12:44', '2024-09-21 13:12:44'),
(55, '87.236.176.71', NULL, '2024-09-21 13:39:23', '2024-09-21 13:39:23', '2024-09-21 13:39:23'),
(56, '40.118.208.242', 'Mozilla/5.0 zgrab/0.x', '2024-09-21 14:02:00', '2024-09-21 14:02:00', '2024-09-21 14:02:00'),
(57, '3.38.148.50', 'Mozilla/5.0 (X11; Linux i686; rv:49.0) Gecko/20100101 Firefox/49.0 SeaMonkey/2.46', '2024-09-21 14:06:46', '2024-09-21 14:06:46', '2024-09-21 14:06:46'),
(58, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-21 14:07:11', '2024-09-21 14:07:11', '2024-09-21 14:07:11'),
(59, '66.249.68.7', 'Googlebot-Image/1.0', '2024-09-21 14:09:20', '2024-09-21 14:09:20', '2024-09-21 14:09:20'),
(60, '205.210.31.59', NULL, '2024-09-21 14:13:46', '2024-09-21 14:13:46', '2024-09-21 14:13:46'),
(61, '43.139.107.122', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '2024-09-21 14:21:31', '2024-09-21 14:21:31', '2024-09-21 14:21:31'),
(62, '206.168.34.195', NULL, '2024-09-21 14:25:08', '2024-09-21 14:25:08', '2024-09-21 14:25:08'),
(63, '45.84.89.3', NULL, '2024-09-21 14:28:04', '2024-09-21 14:28:04', '2024-09-21 14:28:04'),
(64, '167.94.145.110', NULL, '2024-09-21 14:33:52', '2024-09-21 14:33:52', '2024-09-21 14:33:52'),
(65, '167.114.1.235', 'Mozilla/4.0+(compatible;+MSIE+8.0;+Windows+NT+5.2)', '2024-09-21 14:40:16', '2024-09-21 14:40:16', '2024-09-21 14:40:16'),
(66, '83.222.191.62', 'Mozilla/5.0 (Linux; Linux x86_64; en-US) Gecko/20100101 Firefox/122.0', '2024-09-21 14:44:21', '2024-09-21 14:44:21', '2024-09-21 14:44:21'),
(67, '199.45.155.90', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-21 14:49:56', '2024-09-21 14:49:56', '2024-09-21 14:49:56'),
(68, '167.94.145.104', NULL, '2024-09-21 15:17:21', '2024-09-21 15:17:21', '2024-09-21 15:17:21'),
(69, '66.249.68.1', 'Googlebot-Image/1.0', '2024-09-21 15:36:29', '2024-09-21 15:36:29', '2024-09-21 15:36:29'),
(70, '91.92.247.64', NULL, '2024-09-21 15:36:35', '2024-09-21 15:36:35', '2024-09-21 15:36:35'),
(71, '167.94.145.107', NULL, '2024-09-21 15:42:47', '2024-09-21 15:42:47', '2024-09-21 15:42:47'),
(72, '167.94.145.107', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-21 15:42:52', '2024-09-21 15:42:52', '2024-09-21 15:42:52'),
(73, '167.94.138.47', NULL, '2024-09-21 15:54:21', '2024-09-21 15:54:21', '2024-09-21 15:54:21'),
(74, '199.45.154.125', NULL, '2024-09-21 15:58:48', '2024-09-21 15:58:48', '2024-09-21 15:58:48'),
(75, '87.236.176.248', NULL, '2024-09-21 15:58:48', '2024-09-21 15:58:48', '2024-09-21 15:58:48'),
(76, '5.189.172.158', NULL, '2024-09-21 16:00:54', '2024-09-21 16:00:54', '2024-09-21 16:00:54'),
(77, '87.236.176.197', NULL, '2024-09-21 16:05:21', '2024-09-21 16:05:21', '2024-09-21 16:05:21'),
(78, '206.168.34.200', NULL, '2024-09-21 16:05:21', '2024-09-21 16:05:21', '2024-09-21 16:05:21'),
(79, '162.142.125.220', NULL, '2024-09-21 16:05:21', '2024-09-21 16:05:21', '2024-09-21 16:05:21'),
(80, '72.13.62.25', 'Mozilla/5.0 (compatible; ips-agent)', '2024-09-21 16:27:59', '2024-09-21 16:27:59', '2024-09-21 16:27:59'),
(81, '199.45.154.121', NULL, '2024-09-21 16:45:29', '2024-09-21 16:45:29', '2024-09-21 16:45:29'),
(82, '167.94.145.102', NULL, '2024-09-21 16:49:51', '2024-09-21 16:49:51', '2024-09-21 16:49:51'),
(83, '199.45.154.127', NULL, '2024-09-21 16:51:46', '2024-09-21 16:51:46', '2024-09-21 16:51:46'),
(84, '45.156.130.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '2024-09-21 16:56:40', '2024-09-21 16:56:40', '2024-09-21 16:56:40'),
(85, '199.45.155.103', NULL, '2024-09-21 17:39:38', '2024-09-21 17:39:38', '2024-09-21 17:39:38'),
(86, '206.168.34.216', NULL, '2024-09-21 18:01:56', '2024-09-21 18:01:56', '2024-09-21 18:01:56'),
(87, '66.249.79.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 18:18:35', '2024-09-21 18:18:35', '2024-09-21 18:18:35'),
(88, '185.81.68.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.54', '2024-09-21 18:19:21', '2024-09-21 18:19:21', '2024-09-21 18:19:21'),
(89, '66.249.79.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 18:33:44', '2024-09-21 18:33:44', '2024-09-21 18:33:44'),
(90, '87.236.176.223', NULL, '2024-09-21 19:12:24', '2024-09-21 19:12:24', '2024-09-21 19:12:24'),
(91, '184.105.247.252', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2024-09-21 19:27:26', '2024-09-21 19:27:26', '2024-09-21 19:27:26'),
(92, '66.249.68.1', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 19:33:01', '2024-09-21 19:33:01', '2024-09-21 19:33:01'),
(93, '184.105.247.252', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0', '2024-09-21 19:36:12', '2024-09-21 19:36:12', '2024-09-21 19:36:12'),
(94, '184.105.247.252', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/109.0', '2024-09-21 19:44:07', '2024-09-21 19:44:07', '2024-09-21 19:44:07'),
(95, '172.206.142.122', 'Mozilla/5.0 zgrab/0.x', '2024-09-21 19:48:15', '2024-09-21 19:48:15', '2024-09-21 19:48:15'),
(96, '45.55.240.155', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-21 19:49:10', '2024-09-21 19:49:10', '2024-09-21 19:49:10'),
(97, '40.118.210.19', 'Mozilla/5.0 zgrab/0.x', '2024-09-21 19:53:57', '2024-09-21 19:53:57', '2024-09-21 19:53:57'),
(98, '45.200.149.221', 'Links (2.3pre1; Linux 2.6.38-8-generic x86_64; 170x48)', '2024-09-21 19:53:58', '2024-09-21 19:53:58', '2024-09-21 19:53:58'),
(99, '45.200.149.221', 'grub-client-1.5.3; (grub-client-1.5.3; Crawl your own stuff with http://grub.org)', '2024-09-21 20:09:16', '2024-09-21 20:09:16', '2024-09-21 20:09:16'),
(100, '87.236.176.62', NULL, '2024-09-21 20:11:27', '2024-09-21 20:11:27', '2024-09-21 20:11:27'),
(101, '162.142.125.208', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-21 20:33:42', '2024-09-21 20:33:42', '2024-09-21 20:33:42'),
(102, '66.249.79.6', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 20:37:02', '2024-09-21 20:37:02', '2024-09-21 20:37:02'),
(103, '68.183.151.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-21 20:46:18', '2024-09-21 20:46:18', '2024-09-21 20:46:18'),
(104, '66.249.79.6', 'Googlebot-Image/1.0', '2024-09-21 21:11:56', '2024-09-21 21:11:56', '2024-09-21 21:11:56'),
(105, '66.249.79.5', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-21 21:15:13', '2024-09-21 21:15:13', '2024-09-21 21:15:13'),
(106, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-21 21:25:08', '2024-09-21 21:25:08', '2024-09-21 21:25:08'),
(107, '45.148.10.59', 'Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/20121202 Firefox/20.0', '2024-09-21 21:50:34', '2024-09-21 21:50:34', '2024-09-21 21:50:34'),
(108, '40.77.167.23', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-21 22:26:52', '2024-09-21 22:26:52', '2024-09-21 22:26:52'),
(109, '159.89.12.166', NULL, '2024-09-21 23:26:13', '2024-09-21 23:26:13', '2024-09-21 23:26:13'),
(110, '159.89.12.166', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-21 23:26:13', '2024-09-21 23:26:13', '2024-09-21 23:26:13'),
(111, '159.89.12.166', 'Go-http-client/1.1', '2024-09-21 23:26:14', '2024-09-21 23:26:14', '2024-09-21 23:26:14'),
(112, '159.89.12.166', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-21 23:26:17', '2024-09-21 23:26:17', '2024-09-21 23:26:17'),
(113, '195.211.77.140', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', '2024-09-21 23:26:31', '2024-09-21 23:26:31', '2024-09-21 23:26:31'),
(114, '195.211.77.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', '2024-09-21 23:26:53', '2024-09-21 23:26:53', '2024-09-21 23:26:53'),
(115, '104.197.69.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/92.0.4515.159 Safari/537.36', '2024-09-21 23:27:35', '2024-09-21 23:27:35', '2024-09-21 23:27:35'),
(116, '205.169.39.196', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2024-09-21 23:27:43', '2024-09-21 23:27:43', '2024-09-21 23:27:43'),
(117, '179.43.168.130', 'Opera/9.80 (Windows NT 5.1; U; zh-tw) Presto/2.8.131 Version/11.10', '2024-09-21 23:27:52', '2024-09-21 23:27:52', '2024-09-21 23:27:52'),
(118, '205.169.39.196', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', '2024-09-21 23:27:52', '2024-09-21 23:27:52', '2024-09-21 23:27:52'),
(119, '69.4.234.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2024-09-21 23:28:43', '2024-09-21 23:28:43', '2024-09-21 23:28:43'),
(120, '54.242.204.204', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', '2024-09-21 23:30:11', '2024-09-21 23:30:11', '2024-09-21 23:30:11'),
(121, '94.139.228.10', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:37:51', '2024-09-21 23:37:51', '2024-09-21 23:37:51'),
(122, '98.80.233.69', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:38:13', '2024-09-21 23:38:13', '2024-09-21 23:38:13'),
(123, '154.28.222.246', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:38:17', '2024-09-21 23:38:17', '2024-09-21 23:38:17'),
(124, '154.28.222.7', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:38:23', '2024-09-21 23:38:23', '2024-09-21 23:38:23'),
(125, '35.153.168.57', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:38:42', '2024-09-21 23:38:42', '2024-09-21 23:38:42'),
(126, '154.28.222.54', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:39:01', '2024-09-21 23:39:01', '2024-09-21 23:39:01'),
(127, '154.28.222.24', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:39:19', '2024-09-21 23:39:19', '2024-09-21 23:39:19'),
(128, '51.158.161.239', 'Go-http-client/1.1', '2024-09-21 23:39:41', '2024-09-21 23:39:41', '2024-09-21 23:39:41'),
(129, '54.152.65.194', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0', '2024-09-21 23:42:26', '2024-09-21 23:42:26', '2024-09-21 23:42:26'),
(130, '5.164.29.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 (scanner.ducks.party)', '2024-09-21 23:42:34', '2024-09-21 23:42:34', '2024-09-21 23:42:34'),
(131, '34.207.246.61', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1', '2024-09-21 23:46:11', '2024-09-21 23:46:11', '2024-09-21 23:46:11'),
(132, '144.48.118.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-21 23:53:36', '2024-09-21 23:53:36', '2024-09-21 23:53:36'),
(133, '64.233.173.228', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-21 23:54:35', '2024-09-21 23:54:35', '2024-09-21 23:54:35'),
(134, '72.14.201.159', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-21 23:54:35', '2024-09-21 23:54:35', '2024-09-21 23:54:35'),
(135, '203.76.223.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '2024-09-21 23:54:44', '2024-09-21 23:54:44', '2024-09-21 23:54:44'),
(136, '66.249.68.7', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 00:01:24', '2024-09-22 00:01:24', '2024-09-22 00:01:24'),
(137, '66.249.79.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 00:30:57', '2024-09-22 00:30:57', '2024-09-22 00:30:57'),
(138, '43.128.100.220', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-22 00:36:58', '2024-09-22 00:36:58', '2024-09-22 00:36:58'),
(139, '193.186.4.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-22 00:54:21', '2024-09-22 00:54:21', '2024-09-22 00:54:21'),
(140, '144.48.118.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-22 00:54:55', '2024-09-22 00:54:55', '2024-09-22 00:54:55'),
(141, '3.137.149.210', 'Mozilla/5.0 (iPad; CPU OS 9_3_5 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G36 Safari/601.1', '2024-09-22 01:41:31', '2024-09-22 01:41:31', '2024-09-22 01:41:31'),
(142, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 02:03:52', '2024-09-22 02:03:52', '2024-09-22 02:03:52'),
(143, '104.166.80.38', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', '2024-09-22 02:27:31', '2024-09-22 02:27:31', '2024-09-22 02:27:31'),
(144, '17.241.75.219', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', '2024-09-22 02:59:58', '2024-09-22 02:59:58', '2024-09-22 02:59:58'),
(145, '66.249.79.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-22 03:00:58', '2024-09-22 03:00:58', '2024-09-22 03:00:58'),
(146, '185.191.171.13', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 03:03:22', '2024-09-22 03:03:22', '2024-09-22 03:03:22'),
(147, '66.249.68.8', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 03:18:25', '2024-09-22 03:18:25', '2024-09-22 03:18:25'),
(148, '66.249.79.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-22 03:30:58', '2024-09-22 03:30:58', '2024-09-22 03:30:58'),
(149, '43.245.120.148', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', '2024-09-22 03:34:24', '2024-09-22 03:34:24', '2024-09-22 03:34:24'),
(150, '85.208.96.203', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 03:38:34', '2024-09-22 03:38:34', '2024-09-22 03:38:34'),
(151, '59.152.3.48', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/129.0.6668.46 Mobile/15E148 Safari/604.1', '2024-09-22 03:38:38', '2024-09-22 03:38:38', '2024-09-22 03:38:38'),
(152, '207.46.13.126', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-22 03:39:04', '2024-09-22 03:39:04', '2024-09-22 03:39:04'),
(153, '45.90.61.184', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 03:44:35', '2024-09-22 03:44:35', '2024-09-22 03:44:35'),
(154, '176.53.222.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 03:44:36', '2024-09-22 03:44:36', '2024-09-22 03:44:36'),
(155, '89.104.100.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:15:55', '2024-09-22 04:15:55', '2024-09-22 04:15:55'),
(156, '45.90.63.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:15:57', '2024-09-22 04:15:57', '2024-09-22 04:15:57'),
(157, '176.53.218.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:15:59', '2024-09-22 04:15:59', '2024-09-22 04:15:59'),
(158, '45.90.61.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:15:59', '2024-09-22 04:15:59', '2024-09-22 04:15:59'),
(159, '89.104.110.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:00', '2024-09-22 04:16:00', '2024-09-22 04:16:00'),
(160, '176.53.222.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:01', '2024-09-22 04:16:01', '2024-09-22 04:16:01'),
(161, '176.53.216.214', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:04', '2024-09-22 04:16:04', '2024-09-22 04:16:04'),
(162, '45.90.60.223', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:05', '2024-09-22 04:16:05', '2024-09-22 04:16:05'),
(163, '176.53.216.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:07', '2024-09-22 04:16:07', '2024-09-22 04:16:07'),
(164, '89.104.100.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:07', '2024-09-22 04:16:07', '2024-09-22 04:16:07'),
(165, '176.53.218.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:10', '2024-09-22 04:16:10', '2024-09-22 04:16:10'),
(166, '45.90.60.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:10', '2024-09-22 04:16:10', '2024-09-22 04:16:10'),
(167, '176.53.221.127', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:12', '2024-09-22 04:16:12', '2024-09-22 04:16:12'),
(168, '176.53.217.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:13', '2024-09-22 04:16:13', '2024-09-22 04:16:13'),
(169, '176.53.219.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:15', '2024-09-22 04:16:15', '2024-09-22 04:16:15'),
(170, '176.53.221.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:15', '2024-09-22 04:16:15', '2024-09-22 04:16:15'),
(171, '176.53.217.19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:18', '2024-09-22 04:16:18', '2024-09-22 04:16:18'),
(172, '176.53.221.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:18', '2024-09-22 04:16:18', '2024-09-22 04:16:18'),
(173, '89.104.101.187', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:20', '2024-09-22 04:16:20', '2024-09-22 04:16:20'),
(174, '89.104.111.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:21', '2024-09-22 04:16:21', '2024-09-22 04:16:21'),
(175, '176.53.222.184', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:24', '2024-09-22 04:16:24', '2024-09-22 04:16:24'),
(176, '89.104.110.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:25', '2024-09-22 04:16:25', '2024-09-22 04:16:25'),
(177, '176.53.218.223', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:27', '2024-09-22 04:16:27', '2024-09-22 04:16:27'),
(178, '45.90.63.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:28', '2024-09-22 04:16:28', '2024-09-22 04:16:28'),
(179, '89.104.110.220', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:30', '2024-09-22 04:16:30', '2024-09-22 04:16:30'),
(180, '176.53.216.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:30', '2024-09-22 04:16:30', '2024-09-22 04:16:30'),
(181, '176.53.223.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:32', '2024-09-22 04:16:32', '2024-09-22 04:16:32'),
(182, '176.53.218.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:32', '2024-09-22 04:16:32', '2024-09-22 04:16:32'),
(183, '176.53.220.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:34', '2024-09-22 04:16:34', '2024-09-22 04:16:34'),
(184, '45.90.62.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:35', '2024-09-22 04:16:35', '2024-09-22 04:16:35'),
(185, '89.104.110.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:36', '2024-09-22 04:16:36', '2024-09-22 04:16:36'),
(186, '176.53.223.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:39', '2024-09-22 04:16:39', '2024-09-22 04:16:39'),
(187, '89.104.101.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:40', '2024-09-22 04:16:40', '2024-09-22 04:16:40'),
(188, '45.90.62.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:41', '2024-09-22 04:16:41', '2024-09-22 04:16:41'),
(189, '45.90.61.121', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:44', '2024-09-22 04:16:44', '2024-09-22 04:16:44'),
(190, '176.53.222.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:49', '2024-09-22 04:16:49', '2024-09-22 04:16:49'),
(191, '176.53.216.73', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:50', '2024-09-22 04:16:50', '2024-09-22 04:16:50'),
(192, '176.53.222.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:51', '2024-09-22 04:16:51', '2024-09-22 04:16:51'),
(193, '176.53.221.121', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:52', '2024-09-22 04:16:52', '2024-09-22 04:16:52'),
(194, '89.104.100.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:53', '2024-09-22 04:16:53', '2024-09-22 04:16:53'),
(195, '89.104.101.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:55', '2024-09-22 04:16:55', '2024-09-22 04:16:55'),
(196, '89.104.111.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:56', '2024-09-22 04:16:56', '2024-09-22 04:16:56'),
(197, '176.53.216.91', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:58', '2024-09-22 04:16:58', '2024-09-22 04:16:58'),
(198, '89.104.101.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:16:59', '2024-09-22 04:16:59', '2024-09-22 04:16:59'),
(199, '89.104.111.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:01', '2024-09-22 04:17:01', '2024-09-22 04:17:01'),
(200, '176.53.220.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:03', '2024-09-22 04:17:03', '2024-09-22 04:17:03'),
(201, '176.53.220.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:06', '2024-09-22 04:17:06', '2024-09-22 04:17:06'),
(202, '176.53.217.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:10', '2024-09-22 04:17:10', '2024-09-22 04:17:10'),
(203, '176.53.220.200', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:11', '2024-09-22 04:17:11', '2024-09-22 04:17:11'),
(204, '45.90.63.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:12', '2024-09-22 04:17:12', '2024-09-22 04:17:12'),
(205, '176.53.222.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:14', '2024-09-22 04:17:14', '2024-09-22 04:17:14'),
(206, '45.90.63.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:15', '2024-09-22 04:17:15', '2024-09-22 04:17:15'),
(207, '45.90.62.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:22', '2024-09-22 04:17:22', '2024-09-22 04:17:22'),
(208, '89.104.100.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:23', '2024-09-22 04:17:23', '2024-09-22 04:17:23'),
(209, '89.104.111.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:30', '2024-09-22 04:17:30', '2024-09-22 04:17:30'),
(210, '89.104.101.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:30', '2024-09-22 04:17:30', '2024-09-22 04:17:30'),
(211, '45.90.60.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:31', '2024-09-22 04:17:31', '2024-09-22 04:17:31'),
(212, '176.53.220.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:31', '2024-09-22 04:17:31', '2024-09-22 04:17:31'),
(213, '176.53.221.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:33', '2024-09-22 04:17:33', '2024-09-22 04:17:33'),
(214, '176.53.223.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:34', '2024-09-22 04:17:34', '2024-09-22 04:17:34'),
(215, '89.104.110.167', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:36', '2024-09-22 04:17:36', '2024-09-22 04:17:36'),
(216, '176.53.216.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:38', '2024-09-22 04:17:38', '2024-09-22 04:17:38'),
(217, '176.53.217.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:39', '2024-09-22 04:17:39', '2024-09-22 04:17:39'),
(218, '89.104.101.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:42', '2024-09-22 04:17:42', '2024-09-22 04:17:42'),
(219, '176.53.219.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:44', '2024-09-22 04:17:44', '2024-09-22 04:17:44'),
(220, '89.104.110.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:48', '2024-09-22 04:17:48', '2024-09-22 04:17:48'),
(221, '45.90.61.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 04:17:49', '2024-09-22 04:17:49', '2024-09-22 04:17:49'),
(222, '185.191.171.19', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 04:57:15', '2024-09-22 04:57:15', '2024-09-22 04:57:15'),
(223, '156.146.60.130', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-22 04:59:19', '2024-09-22 04:59:19', '2024-09-22 04:59:19'),
(224, '185.191.171.17', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 05:25:14', '2024-09-22 05:25:14', '2024-09-22 05:25:14'),
(225, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-22 05:38:51', '2024-09-22 05:38:51', '2024-09-22 05:38:51'),
(226, '45.152.212.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.0.0', '2024-09-22 06:07:52', '2024-09-22 06:07:52', '2024-09-22 06:07:52'),
(227, '85.208.96.199', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 06:14:22', '2024-09-22 06:14:22', '2024-09-22 06:14:22'),
(228, '66.249.79.1', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 06:18:25', '2024-09-22 06:18:25', '2024-09-22 06:18:25'),
(229, '198.235.24.35', NULL, '2024-09-22 06:49:19', '2024-09-22 06:49:19', '2024-09-22 06:49:19'),
(230, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 07:14:09', '2024-09-22 07:14:09', '2024-09-22 07:14:09'),
(231, '47.242.224.70', 'Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01', '2024-09-22 07:26:56', '2024-09-22 07:26:56', '2024-09-22 07:26:56'),
(232, '5.255.231.157', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2024-09-22 07:37:36', '2024-09-22 07:37:36', '2024-09-22 07:37:36'),
(233, '85.208.96.193', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 07:59:12', '2024-09-22 07:59:12', '2024-09-22 07:59:12'),
(234, '95.108.213.223', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2024-09-22 08:01:49', '2024-09-22 08:01:49', '2024-09-22 08:01:49'),
(235, '47.242.224.70', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009032803', '2024-09-22 08:10:55', '2024-09-22 08:10:55', '2024-09-22 08:10:55'),
(236, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-22 08:24:43', '2024-09-22 08:24:43', '2024-09-22 08:24:43'),
(237, '119.30.47.18', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-22 08:43:41', '2024-09-22 08:43:41', '2024-09-22 08:43:41'),
(238, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 09:02:59', '2024-09-22 09:02:59', '2024-09-22 09:02:59'),
(239, '66.249.66.201', 'Googlebot-Image/1.0', '2024-09-22 09:03:00', '2024-09-22 09:03:00', '2024-09-22 09:03:00'),
(240, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 09:05:00', '2024-09-22 09:05:00', '2024-09-22 09:05:00'),
(241, '103.124.237.232', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-22 09:36:59', '2024-09-22 09:36:59', '2024-09-22 09:36:59'),
(242, '66.249.66.202', 'Googlebot-Image/1.0', '2024-09-22 09:47:59', '2024-09-22 09:47:59', '2024-09-22 09:47:59'),
(243, '59.153.103.244', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-22 09:53:31', '2024-09-22 09:53:31', '2024-09-22 09:53:31'),
(244, '45.118.245.70', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', '2024-09-22 09:54:20', '2024-09-22 09:54:20', '2024-09-22 09:54:20'),
(245, '185.191.171.4', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 10:12:18', '2024-09-22 10:12:18', '2024-09-22 10:12:18'),
(246, '95.173.161.230', 'Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/95.0', '2024-09-22 10:16:58', '2024-09-22 10:16:58', '2024-09-22 10:16:58'),
(247, '17.241.75.154', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', '2024-09-22 10:32:41', '2024-09-22 10:32:41', '2024-09-22 10:32:41'),
(248, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 10:33:00', '2024-09-22 10:33:00', '2024-09-22 10:33:00'),
(249, '66.249.66.203', 'Googlebot-Image/1.0', '2024-09-22 10:55:30', '2024-09-22 10:55:30', '2024-09-22 10:55:30'),
(250, '109.202.99.46', 'Go-http-client/1.1', '2024-09-22 11:11:46', '2024-09-22 11:11:46', '2024-09-22 11:11:46'),
(251, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 11:22:00', '2024-09-22 11:22:00', '2024-09-22 11:22:00'),
(252, '171.244.43.14', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36', '2024-09-22 11:28:54', '2024-09-22 11:28:54', '2024-09-22 11:28:54'),
(253, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 12:10:00', '2024-09-22 12:10:00', '2024-09-22 12:10:00'),
(254, '17.241.219.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', '2024-09-22 12:24:35', '2024-09-22 12:24:35', '2024-09-22 12:24:35'),
(255, '103.69.148.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-22 12:53:07', '2024-09-22 12:53:07', '2024-09-22 12:53:07'),
(256, '47.88.87.97', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:24', '2024-09-22 12:57:24', '2024-09-22 12:57:24'),
(257, '47.88.90.156', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:24', '2024-09-22 12:57:24', '2024-09-22 12:57:24'),
(258, '47.251.11.3', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:24', '2024-09-22 12:57:24', '2024-09-22 12:57:24'),
(259, '47.88.5.56', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:25', '2024-09-22 12:57:25', '2024-09-22 12:57:25'),
(260, '47.88.94.159', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:25', '2024-09-22 12:57:25', '2024-09-22 12:57:25'),
(261, '47.254.25.10', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:26', '2024-09-22 12:57:26', '2024-09-22 12:57:26'),
(262, '47.89.195.210', 'Mozilla/5.0 (Linux; Android 11; M2004J15SC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Mobile Safari/537.36', '2024-09-22 12:57:26', '2024-09-22 12:57:26', '2024-09-22 12:57:26'),
(263, '45.90.62.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 13:08:12', '2024-09-22 13:08:12', '2024-09-22 13:08:12'),
(264, '176.53.218.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 13:08:15', '2024-09-22 13:08:15', '2024-09-22 13:08:15'),
(265, '128.90.135.3', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-22 13:17:08', '2024-09-22 13:17:08', '2024-09-22 13:17:08');
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(266, '128.90.135.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-22 13:17:09', '2024-09-22 13:17:09', '2024-09-22 13:17:09'),
(267, '185.191.171.14', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 13:23:28', '2024-09-22 13:23:28', '2024-09-22 13:23:28'),
(268, '205.169.39.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', '2024-09-22 13:24:46', '2024-09-22 13:24:46', '2024-09-22 13:24:46'),
(269, '43.130.16.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-22 13:49:35', '2024-09-22 13:49:35', '2024-09-22 13:49:35'),
(270, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-22 14:32:38', '2024-09-22 14:32:38', '2024-09-22 14:32:38'),
(271, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 14:46:02', '2024-09-22 14:46:02', '2024-09-22 14:46:02'),
(272, '34.102.54.213', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-22 14:51:22', '2024-09-22 14:51:22', '2024-09-22 14:51:22'),
(273, '18.231.149.206', 'Mozilla/5.0 (iPad; CPU OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2024-09-22 15:10:34', '2024-09-22 15:10:34', '2024-09-22 15:10:34'),
(274, '54.36.148.186', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', '2024-09-22 15:29:02', '2024-09-22 15:29:02', '2024-09-22 15:29:02'),
(275, '195.178.110.21', 'Mozilla/5.0 (Kubuntu; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', '2024-09-22 16:36:29', '2024-09-22 16:36:29', '2024-09-22 16:36:29'),
(276, '176.53.220.192', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:41:41', '2024-09-22 16:41:41', '2024-09-22 16:41:41'),
(277, '176.53.223.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:41:42', '2024-09-22 16:41:42', '2024-09-22 16:41:42'),
(278, '176.53.220.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:41', '2024-09-22 16:47:41', '2024-09-22 16:47:41'),
(279, '176.53.219.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:45', '2024-09-22 16:47:45', '2024-09-22 16:47:45'),
(280, '89.104.100.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:50', '2024-09-22 16:47:50', '2024-09-22 16:47:50'),
(281, '89.104.110.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:51', '2024-09-22 16:47:51', '2024-09-22 16:47:51'),
(282, '45.90.60.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:52', '2024-09-22 16:47:52', '2024-09-22 16:47:52'),
(283, '176.53.222.216', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-22 16:47:53', '2024-09-22 16:47:53', '2024-09-22 16:47:53'),
(284, '85.208.96.206', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-22 17:28:51', '2024-09-22 17:28:51', '2024-09-22 17:28:51'),
(285, '182.42.105.85', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-22 17:33:53', '2024-09-22 17:33:53', '2024-09-22 17:33:53'),
(286, '65.181.111.249', NULL, '2024-09-22 18:01:25', '2024-09-22 18:01:25', '2024-09-22 18:01:25'),
(287, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 18:40:27', '2024-09-22 18:40:27', '2024-09-22 18:40:27'),
(288, '138.197.149.236', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-22 18:45:59', '2024-09-22 18:45:59', '2024-09-22 18:45:59'),
(289, '207.46.13.36', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-22 19:22:59', '2024-09-22 19:22:59', '2024-09-22 19:22:59'),
(290, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 20:10:26', '2024-09-22 20:10:26', '2024-09-22 20:10:26'),
(291, '146.190.111.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-22 20:54:31', '2024-09-22 20:54:31', '2024-09-22 20:54:31'),
(292, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-22 20:57:32', '2024-09-22 20:57:32', '2024-09-22 20:57:32'),
(293, '103.69.148.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-22 21:02:54', '2024-09-22 21:02:54', '2024-09-22 21:02:54'),
(294, '44.234.60.9', 'Mozilla/5.0 (Linux; Android 12; Pixel 6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36', '2024-09-22 21:20:58', '2024-09-22 21:20:58', '2024-09-22 21:20:58'),
(295, '199.244.88.220', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2024-09-22 21:22:43', '2024-09-22 21:22:43', '2024-09-22 21:22:43'),
(296, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 21:40:26', '2024-09-22 21:40:26', '2024-09-22 21:40:26'),
(297, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 21:40:28', '2024-09-22 21:40:28', '2024-09-22 21:40:28'),
(298, '207.46.13.54', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-22 22:22:15', '2024-09-22 22:22:15', '2024-09-22 22:22:15'),
(299, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 22:22:18', '2024-09-22 22:22:18', '2024-09-22 22:22:18'),
(300, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-22 22:57:53', '2024-09-22 22:57:53', '2024-09-22 22:57:53'),
(301, '66.70.181.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', '2024-09-22 23:10:10', '2024-09-22 23:10:10', '2024-09-22 23:10:10'),
(302, '66.70.181.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '2024-09-22 23:10:11', '2024-09-22 23:10:11', '2024-09-22 23:10:11'),
(303, '66.249.66.200', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-22 23:31:12', '2024-09-22 23:31:12', '2024-09-22 23:31:12'),
(304, '64.233.173.226', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-23 00:57:46', '2024-09-23 00:57:46', '2024-09-23 00:57:46'),
(305, '27.147.128.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-23 00:58:06', '2024-09-23 00:58:06', '2024-09-23 00:58:06'),
(306, '27.147.177.102', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-23 01:16:23', '2024-09-23 01:16:23', '2024-09-23 01:16:23'),
(307, '45.200.149.221', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25', '2024-09-23 01:28:02', '2024-09-23 01:28:02', '2024-09-23 01:28:02'),
(308, '104.166.80.224', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', '2024-09-23 02:29:37', '2024-09-23 02:29:37', '2024-09-23 02:29:37'),
(309, '176.53.219.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 03:43:11', '2024-09-23 03:43:11', '2024-09-23 03:43:11'),
(310, '176.53.216.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 03:43:15', '2024-09-23 03:43:15', '2024-09-23 03:43:15'),
(311, '176.53.221.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 03:43:16', '2024-09-23 03:43:16', '2024-09-23 03:43:16'),
(312, '52.167.144.222', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 05:30:07', '2024-09-23 05:30:07', '2024-09-23 05:30:07'),
(313, '45.90.60.111', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:42', '2024-09-23 05:34:42', '2024-09-23 05:34:42'),
(314, '89.104.111.188', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:43', '2024-09-23 05:34:43', '2024-09-23 05:34:43'),
(315, '45.90.63.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:46', '2024-09-23 05:34:46', '2024-09-23 05:34:46'),
(316, '89.104.100.179', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:46', '2024-09-23 05:34:46', '2024-09-23 05:34:46'),
(317, '176.53.223.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:47', '2024-09-23 05:34:47', '2024-09-23 05:34:47'),
(318, '176.53.218.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:48', '2024-09-23 05:34:48', '2024-09-23 05:34:48'),
(319, '176.53.221.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:49', '2024-09-23 05:34:49', '2024-09-23 05:34:49'),
(320, '89.104.110.193', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:50', '2024-09-23 05:34:50', '2024-09-23 05:34:50'),
(321, '45.90.61.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:52', '2024-09-23 05:34:52', '2024-09-23 05:34:52'),
(322, '45.90.62.192', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:54', '2024-09-23 05:34:54', '2024-09-23 05:34:54'),
(323, '176.53.217.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:59', '2024-09-23 05:34:59', '2024-09-23 05:34:59'),
(324, '176.53.222.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:34:59', '2024-09-23 05:34:59', '2024-09-23 05:34:59'),
(325, '89.104.110.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:01', '2024-09-23 05:35:01', '2024-09-23 05:35:01'),
(326, '176.53.221.223', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:05', '2024-09-23 05:35:05', '2024-09-23 05:35:05'),
(327, '176.53.221.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:08', '2024-09-23 05:35:08', '2024-09-23 05:35:08'),
(328, '176.53.221.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:16', '2024-09-23 05:35:16', '2024-09-23 05:35:16'),
(329, '45.90.63.126', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:19', '2024-09-23 05:35:19', '2024-09-23 05:35:19'),
(330, '89.104.110.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:20', '2024-09-23 05:35:20', '2024-09-23 05:35:20'),
(331, '89.104.100.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:22', '2024-09-23 05:35:22', '2024-09-23 05:35:22'),
(332, '176.53.222.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:23', '2024-09-23 05:35:23', '2024-09-23 05:35:23'),
(333, '89.104.100.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:24', '2024-09-23 05:35:24', '2024-09-23 05:35:24'),
(334, '176.53.223.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:25', '2024-09-23 05:35:25', '2024-09-23 05:35:25'),
(335, '45.90.62.93', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:30', '2024-09-23 05:35:30', '2024-09-23 05:35:30'),
(336, '176.53.217.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:31', '2024-09-23 05:35:31', '2024-09-23 05:35:31'),
(337, '176.53.218.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:37', '2024-09-23 05:35:37', '2024-09-23 05:35:37'),
(338, '45.90.61.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:41', '2024-09-23 05:35:41', '2024-09-23 05:35:41'),
(339, '89.104.100.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:42', '2024-09-23 05:35:42', '2024-09-23 05:35:42'),
(340, '176.53.217.19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:46', '2024-09-23 05:35:46', '2024-09-23 05:35:46'),
(341, '45.90.63.146', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:47', '2024-09-23 05:35:47', '2024-09-23 05:35:47'),
(342, '176.53.222.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:49', '2024-09-23 05:35:49', '2024-09-23 05:35:49'),
(343, '89.104.100.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:50', '2024-09-23 05:35:50', '2024-09-23 05:35:50'),
(344, '45.90.63.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:35:54', '2024-09-23 05:35:54', '2024-09-23 05:35:54'),
(345, '89.104.101.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:02', '2024-09-23 05:36:02', '2024-09-23 05:36:02'),
(346, '89.104.101.220', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:05', '2024-09-23 05:36:05', '2024-09-23 05:36:05'),
(347, '176.53.220.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:06', '2024-09-23 05:36:06', '2024-09-23 05:36:06'),
(348, '89.104.101.209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:06', '2024-09-23 05:36:06', '2024-09-23 05:36:06'),
(349, '176.53.217.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:09', '2024-09-23 05:36:09', '2024-09-23 05:36:09'),
(350, '176.53.222.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:10', '2024-09-23 05:36:10', '2024-09-23 05:36:10'),
(351, '45.90.61.229', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:16', '2024-09-23 05:36:16', '2024-09-23 05:36:16'),
(352, '176.53.218.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:17', '2024-09-23 05:36:17', '2024-09-23 05:36:17'),
(353, '176.53.218.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:25', '2024-09-23 05:36:25', '2024-09-23 05:36:25'),
(354, '89.104.101.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:29', '2024-09-23 05:36:29', '2024-09-23 05:36:29'),
(355, '45.90.60.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:34', '2024-09-23 05:36:34', '2024-09-23 05:36:34'),
(356, '176.53.220.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:34', '2024-09-23 05:36:34', '2024-09-23 05:36:34'),
(357, '176.53.216.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:36', '2024-09-23 05:36:36', '2024-09-23 05:36:36'),
(358, '45.90.60.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:38', '2024-09-23 05:36:38', '2024-09-23 05:36:38'),
(359, '176.53.220.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:39', '2024-09-23 05:36:39', '2024-09-23 05:36:39'),
(360, '89.104.110.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:40', '2024-09-23 05:36:40', '2024-09-23 05:36:40'),
(361, '176.53.216.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:41', '2024-09-23 05:36:41', '2024-09-23 05:36:41'),
(362, '176.53.216.91', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:44', '2024-09-23 05:36:44', '2024-09-23 05:36:44'),
(363, '176.53.217.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:48', '2024-09-23 05:36:48', '2024-09-23 05:36:48'),
(364, '89.104.100.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:48', '2024-09-23 05:36:48', '2024-09-23 05:36:48'),
(365, '89.104.110.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:54', '2024-09-23 05:36:54', '2024-09-23 05:36:54'),
(366, '176.53.218.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:36:56', '2024-09-23 05:36:56', '2024-09-23 05:36:56'),
(367, '176.53.223.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:01', '2024-09-23 05:37:01', '2024-09-23 05:37:01'),
(368, '176.53.219.226', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:01', '2024-09-23 05:37:01', '2024-09-23 05:37:01'),
(369, '89.104.111.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:05', '2024-09-23 05:37:05', '2024-09-23 05:37:05'),
(370, '176.53.219.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:07', '2024-09-23 05:37:07', '2024-09-23 05:37:07'),
(371, '45.90.60.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:09', '2024-09-23 05:37:09', '2024-09-23 05:37:09'),
(372, '176.53.217.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:09', '2024-09-23 05:37:09', '2024-09-23 05:37:09'),
(373, '45.90.63.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:13', '2024-09-23 05:37:13', '2024-09-23 05:37:13'),
(374, '176.53.217.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:15', '2024-09-23 05:37:15', '2024-09-23 05:37:15'),
(375, '176.53.219.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:20', '2024-09-23 05:37:20', '2024-09-23 05:37:20'),
(376, '176.53.218.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:22', '2024-09-23 05:37:22', '2024-09-23 05:37:22'),
(377, '176.53.223.255', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:26', '2024-09-23 05:37:26', '2024-09-23 05:37:26'),
(378, '45.90.62.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:29', '2024-09-23 05:37:29', '2024-09-23 05:37:29'),
(379, '176.53.221.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 05:37:30', '2024-09-23 05:37:30', '2024-09-23 05:37:30'),
(380, '106.54.200.247', 'Mozilla/5.0 (Linux; Android 10; LIO-AN00 Build/HUAWEILIO-AN00; wv) MicroMessenger Weixin QQ AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/78.0.3904.62 XWEB/2692 MMWEBSDK/200901 Mobile Safari/537.36', '2024-09-23 05:42:11', '2024-09-23 05:42:11', '2024-09-23 05:42:11'),
(381, '157.55.39.57', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 06:12:45', '2024-09-23 06:12:45', '2024-09-23 06:12:45'),
(382, '170.106.104.42', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-23 06:32:04', '2024-09-23 06:32:04', '2024-09-23 06:32:04'),
(383, '207.46.13.111', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 07:06:48', '2024-09-23 07:06:48', '2024-09-23 07:06:48'),
(384, '40.77.167.48', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 07:13:26', '2024-09-23 07:13:26', '2024-09-23 07:13:26'),
(385, '157.55.39.48', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 07:25:00', '2024-09-23 07:25:00', '2024-09-23 07:25:00'),
(386, '59.153.103.244', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-23 08:00:38', '2024-09-23 08:00:38', '2024-09-23 08:00:38'),
(387, '66.249.66.202', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-23 08:01:27', '2024-09-23 08:01:27', '2024-09-23 08:01:27'),
(388, '66.249.66.203', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-23 08:31:22', '2024-09-23 08:31:22', '2024-09-23 08:31:22'),
(389, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 08:49:39', '2024-09-23 08:49:39', '2024-09-23 08:49:39'),
(390, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-23 08:53:20', '2024-09-23 08:53:20', '2024-09-23 08:53:20'),
(391, '66.249.66.207', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-23 09:01:23', '2024-09-23 09:01:23', '2024-09-23 09:01:23'),
(392, '51.81.46.212', NULL, '2024-09-23 09:15:47', '2024-09-23 09:15:47', '2024-09-23 09:15:47'),
(393, '66.249.66.201', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-23 09:31:23', '2024-09-23 09:31:23', '2024-09-23 09:31:23'),
(394, '118.179.162.65', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-23 09:56:53', '2024-09-23 09:56:53', '2024-09-23 09:56:53'),
(395, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-23 11:09:22', '2024-09-23 11:09:22', '2024-09-23 11:09:22'),
(396, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-23 12:13:10', '2024-09-23 12:13:10', '2024-09-23 12:13:10'),
(397, '91.142.222.180', 'Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/95.0', '2024-09-23 12:41:19', '2024-09-23 12:41:20', '2024-09-23 12:41:20'),
(398, '176.53.222.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 12:49:33', '2024-09-23 12:49:33', '2024-09-23 12:49:33'),
(399, '45.200.148.16', 'Mozilla/5.0 (Linux; U; Android 7.0; es-es; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.9.7-g', '2024-09-23 12:55:48', '2024-09-23 12:55:48', '2024-09-23 12:55:48'),
(400, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-23 14:01:41', '2024-09-23 14:01:41', '2024-09-23 14:01:41'),
(401, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-23 15:31:41', '2024-09-23 15:31:41', '2024-09-23 15:31:41'),
(402, '92.118.39.244', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2024-09-23 15:43:40', '2024-09-23 15:43:40', '2024-09-23 15:43:40'),
(403, '36.41.75.167', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-23 16:12:27', '2024-09-23 16:12:27', '2024-09-23 16:12:27'),
(404, '59.153.103.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/129.0.6668.46 Mobile/15E148 Safari/604.1', '2024-09-23 16:20:51', '2024-09-23 16:20:51', '2024-09-23 16:20:51'),
(405, '72.13.46.3', 'Mozilla/5.0 (compatible; ips-agent)', '2024-09-23 16:24:39', '2024-09-23 16:24:39', '2024-09-23 16:24:39'),
(406, '176.53.217.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:26:03', '2024-09-23 16:26:03', '2024-09-23 16:26:03'),
(407, '176.53.220.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:26:04', '2024-09-23 16:26:04', '2024-09-23 16:26:04'),
(408, '176.53.218.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:45', '2024-09-23 16:45:45', '2024-09-23 16:45:45'),
(409, '176.53.216.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:49', '2024-09-23 16:45:49', '2024-09-23 16:45:49'),
(410, '176.53.222.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:52', '2024-09-23 16:45:52', '2024-09-23 16:45:52'),
(411, '176.53.219.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:55', '2024-09-23 16:45:55', '2024-09-23 16:45:55'),
(412, '176.53.219.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:58', '2024-09-23 16:45:58', '2024-09-23 16:45:58'),
(413, '176.53.216.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:58', '2024-09-23 16:45:58', '2024-09-23 16:45:58'),
(414, '45.90.62.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:45:59', '2024-09-23 16:45:59', '2024-09-23 16:45:59'),
(415, '176.53.221.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:46:00', '2024-09-23 16:46:00', '2024-09-23 16:46:00'),
(416, '176.53.220.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-23 16:46:01', '2024-09-23 16:46:01', '2024-09-23 16:46:01'),
(417, '35.207.5.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.2; rb.gy/oupwis) Chrome/124.0.0.0 Safari/537.36', '2024-09-23 17:06:44', '2024-09-23 17:06:44', '2024-09-23 17:06:44'),
(418, '118.127.8.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.2; rb.gy/oupwis) Chrome/124.0.0.0 Safari/537.36', '2024-09-23 17:06:51', '2024-09-23 17:06:51', '2024-09-23 17:06:51'),
(419, '46.4.84.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.2; rb.gy/oupwis) Chrome/124.0.0.0 Safari/537.36', '2024-09-23 17:06:52', '2024-09-23 17:06:52', '2024-09-23 17:06:52'),
(420, '128.90.135.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-23 17:23:49', '2024-09-23 17:23:49', '2024-09-23 17:23:49'),
(421, '128.90.135.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-23 17:23:50', '2024-09-23 17:23:50', '2024-09-23 17:23:50'),
(422, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:04:10', '2024-09-23 18:04:10', '2024-09-23 18:04:10'),
(423, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:17:00', '2024-09-23 18:17:00', '2024-09-23 18:17:00'),
(424, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-23 18:31:41', '2024-09-23 18:31:41', '2024-09-23 18:31:41'),
(425, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:32:13', '2024-09-23 18:32:13', '2024-09-23 18:32:13'),
(426, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:32:13', '2024-09-23 18:32:13', '2024-09-23 18:32:13'),
(427, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:32:14', '2024-09-23 18:32:14', '2024-09-23 18:32:14'),
(428, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-23 18:34:14', '2024-09-23 18:34:14', '2024-09-23 18:34:14'),
(429, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-23 19:16:41', '2024-09-23 19:16:41', '2024-09-23 19:16:41'),
(430, '45.139.104.148', 'Mozilla/5.0 (Linux; U; Android 4.4.2; en-US; HM NOTE 1W Build/KOT49H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/11.0.5.850 U3/0.8.0 Mobile Safari/534.30', '2024-09-23 19:19:17', '2024-09-23 19:19:17', '2024-09-23 19:19:17'),
(431, '45.139.104.148', 'python-requests/2.31.0', '2024-09-23 19:19:29', '2024-09-23 19:19:29', '2024-09-23 19:19:29'),
(432, '27.147.177.102', NULL, '2024-09-23 21:02:31', '2024-09-23 21:02:31', '2024-09-23 21:02:31'),
(433, '103.153.183.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-23 21:05:22', '2024-09-23 21:05:22', '2024-09-23 21:05:22'),
(434, '66.249.66.206', 'Googlebot-Image/1.0', '2024-09-23 21:22:25', '2024-09-23 21:22:25', '2024-09-23 21:22:25'),
(435, '66.249.66.207', 'Googlebot-Image/1.0', '2024-09-23 21:45:16', '2024-09-23 21:45:16', '2024-09-23 21:45:16'),
(436, '66.249.66.200', 'Googlebot-Image/1.0', '2024-09-23 22:08:46', '2024-09-23 22:08:46', '2024-09-23 22:08:46'),
(437, '52.167.144.219', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 22:09:08', '2024-09-23 22:09:08', '2024-09-23 22:09:08'),
(438, '52.167.144.186', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 22:10:23', '2024-09-23 22:10:23', '2024-09-23 22:10:23'),
(439, '64.226.65.160', NULL, '2024-09-23 22:24:10', '2024-09-23 22:24:10', '2024-09-23 22:24:10'),
(440, '64.226.65.160', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-23 22:24:10', '2024-09-23 22:24:10', '2024-09-23 22:24:10'),
(441, '64.226.65.160', 'Go-http-client/1.1', '2024-09-23 22:24:11', '2024-09-23 22:24:11', '2024-09-23 22:24:11'),
(442, '64.226.65.160', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-23 22:24:14', '2024-09-23 22:24:14', '2024-09-23 22:24:14'),
(443, '52.167.144.232', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-23 22:34:50', '2024-09-23 22:34:50', '2024-09-23 22:34:50'),
(444, '92.118.39.244', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2024-09-23 22:52:56', '2024-09-23 22:52:56', '2024-09-23 22:52:56'),
(445, '66.249.66.201', 'Googlebot-Image/1.0', '2024-09-23 22:54:47', '2024-09-23 22:54:47', '2024-09-23 22:54:47'),
(446, '43.159.128.237', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-24 00:24:00', '2024-09-24 00:24:00', '2024-09-24 00:24:00'),
(447, '202.134.10.130', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-24 00:27:20', '2024-09-24 00:27:20', '2024-09-24 00:27:20'),
(448, '202.134.10.130', 'WhatsApp/2.23.20.0', '2024-09-24 00:29:19', '2024-09-24 00:29:19', '2024-09-24 00:29:19'),
(449, '182.160.110.182', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-24 00:57:22', '2024-09-24 00:57:22', '2024-09-24 00:57:22'),
(450, '54.174.62.135', 'HubSpot Connect 2.0 (http://dev.hubspot.com/) (namespace: domain_http_fetcher) - BidenRefreshTasks-DELAWARE', '2024-09-24 00:58:40', '2024-09-24 00:58:40', '2024-09-24 00:58:40'),
(451, '35.89.30.215', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2024-09-24 00:58:47', '2024-09-24 00:58:47', '2024-09-24 00:58:47'),
(452, '3.239.59.69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.75 Safari/537.36', '2024-09-24 01:36:39', '2024-09-24 01:36:39', '2024-09-24 01:36:39'),
(453, '172.105.158.219', NULL, '2024-09-24 01:52:23', '2024-09-24 01:52:23', '2024-09-24 01:52:23'),
(454, '172.105.158.219', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-24 01:52:25', '2024-09-24 01:52:25', '2024-09-24 01:52:25'),
(455, '172.105.158.219', 'Go-http-client/1.1', '2024-09-24 01:52:25', '2024-09-24 01:52:25', '2024-09-24 01:52:25'),
(456, '172.105.158.219', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-24 01:52:27', '2024-09-24 01:52:27', '2024-09-24 01:52:27'),
(457, '103.69.148.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-24 02:33:37', '2024-09-24 02:33:37', '2024-09-24 02:33:37'),
(458, '52.167.144.161', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 03:14:36', '2024-09-24 03:14:36', '2024-09-24 03:14:36'),
(459, '176.53.219.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 03:48:05', '2024-09-24 03:48:05', '2024-09-24 03:48:05'),
(460, '176.53.222.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 03:48:07', '2024-09-24 03:48:07', '2024-09-24 03:48:07'),
(461, '59.152.5.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-24 04:28:13', '2024-09-24 04:28:13', '2024-09-24 04:28:13'),
(462, '176.53.216.73', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:18', '2024-09-24 05:11:18', '2024-09-24 05:11:18'),
(463, '89.104.101.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:18', '2024-09-24 05:11:18', '2024-09-24 05:11:18'),
(464, '45.90.60.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:20', '2024-09-24 05:11:20', '2024-09-24 05:11:20'),
(465, '176.53.217.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:21', '2024-09-24 05:11:21', '2024-09-24 05:11:21'),
(466, '89.104.100.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:21', '2024-09-24 05:11:21', '2024-09-24 05:11:21'),
(467, '176.53.220.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:22', '2024-09-24 05:11:22', '2024-09-24 05:11:22'),
(468, '45.90.61.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:24', '2024-09-24 05:11:24', '2024-09-24 05:11:24'),
(469, '45.90.61.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:26', '2024-09-24 05:11:26', '2024-09-24 05:11:26'),
(470, '176.53.217.113', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:27', '2024-09-24 05:11:27', '2024-09-24 05:11:27'),
(471, '89.104.110.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:29', '2024-09-24 05:11:29', '2024-09-24 05:11:29'),
(472, '45.90.60.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:31', '2024-09-24 05:11:31', '2024-09-24 05:11:31'),
(473, '89.104.110.193', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:33', '2024-09-24 05:11:33', '2024-09-24 05:11:33'),
(474, '45.90.60.223', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:34', '2024-09-24 05:11:34', '2024-09-24 05:11:34'),
(475, '89.104.110.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:36', '2024-09-24 05:11:36', '2024-09-24 05:11:36'),
(476, '89.104.111.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:37', '2024-09-24 05:11:37', '2024-09-24 05:11:37'),
(477, '89.104.100.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:39', '2024-09-24 05:11:39', '2024-09-24 05:11:39'),
(478, '89.104.110.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:40', '2024-09-24 05:11:40', '2024-09-24 05:11:40'),
(479, '176.53.219.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:42', '2024-09-24 05:11:42', '2024-09-24 05:11:42'),
(480, '176.53.218.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:46', '2024-09-24 05:11:46', '2024-09-24 05:11:46'),
(481, '89.104.110.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:47', '2024-09-24 05:11:47', '2024-09-24 05:11:47'),
(482, '45.90.61.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:50', '2024-09-24 05:11:50', '2024-09-24 05:11:50'),
(483, '176.53.222.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:51', '2024-09-24 05:11:51', '2024-09-24 05:11:51'),
(484, '45.90.60.111', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:53', '2024-09-24 05:11:53', '2024-09-24 05:11:53'),
(485, '89.104.101.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:53', '2024-09-24 05:11:53', '2024-09-24 05:11:53'),
(486, '176.53.219.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:55', '2024-09-24 05:11:55', '2024-09-24 05:11:55'),
(487, '176.53.223.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:56', '2024-09-24 05:11:56', '2024-09-24 05:11:56'),
(488, '176.53.216.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:57', '2024-09-24 05:11:57', '2024-09-24 05:11:57'),
(489, '176.53.218.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:58', '2024-09-24 05:11:58', '2024-09-24 05:11:58'),
(490, '45.90.63.253', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:11:59', '2024-09-24 05:11:59', '2024-09-24 05:11:59'),
(491, '176.53.223.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:00', '2024-09-24 05:12:00', '2024-09-24 05:12:00'),
(492, '176.53.216.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:01', '2024-09-24 05:12:01', '2024-09-24 05:12:01'),
(493, '45.90.60.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:07', '2024-09-24 05:12:07', '2024-09-24 05:12:07'),
(494, '45.90.61.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:08', '2024-09-24 05:12:08', '2024-09-24 05:12:08'),
(495, '176.53.218.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:12', '2024-09-24 05:12:12', '2024-09-24 05:12:12'),
(496, '89.104.111.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:12', '2024-09-24 05:12:12', '2024-09-24 05:12:12'),
(497, '45.90.60.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:15', '2024-09-24 05:12:15', '2024-09-24 05:12:15'),
(498, '45.90.62.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:20', '2024-09-24 05:12:20', '2024-09-24 05:12:20'),
(499, '176.53.222.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:21', '2024-09-24 05:12:21', '2024-09-24 05:12:21'),
(500, '176.53.219.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:22', '2024-09-24 05:12:22', '2024-09-24 05:12:22'),
(501, '176.53.220.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:30', '2024-09-24 05:12:30', '2024-09-24 05:12:30');
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(502, '176.53.216.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:36', '2024-09-24 05:12:36', '2024-09-24 05:12:36'),
(503, '176.53.222.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:37', '2024-09-24 05:12:37', '2024-09-24 05:12:37'),
(504, '176.53.221.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:38', '2024-09-24 05:12:38', '2024-09-24 05:12:38'),
(505, '89.104.101.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:40', '2024-09-24 05:12:40', '2024-09-24 05:12:40'),
(506, '89.104.100.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:41', '2024-09-24 05:12:41', '2024-09-24 05:12:41'),
(507, '45.90.62.93', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:43', '2024-09-24 05:12:43', '2024-09-24 05:12:43'),
(508, '89.104.110.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:44', '2024-09-24 05:12:44', '2024-09-24 05:12:44'),
(509, '176.53.223.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:46', '2024-09-24 05:12:46', '2024-09-24 05:12:46'),
(510, '89.104.101.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:48', '2024-09-24 05:12:48', '2024-09-24 05:12:48'),
(511, '89.104.110.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:53', '2024-09-24 05:12:53', '2024-09-24 05:12:53'),
(512, '176.53.222.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:54', '2024-09-24 05:12:54', '2024-09-24 05:12:54'),
(513, '176.53.217.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:12:57', '2024-09-24 05:12:57', '2024-09-24 05:12:57'),
(514, '176.53.217.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:05', '2024-09-24 05:13:05', '2024-09-24 05:13:05'),
(515, '176.53.221.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:13', '2024-09-24 05:13:13', '2024-09-24 05:13:13'),
(516, '89.104.100.46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:13', '2024-09-24 05:13:13', '2024-09-24 05:13:13'),
(517, '176.53.220.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:28', '2024-09-24 05:13:28', '2024-09-24 05:13:28'),
(518, '176.53.218.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:28', '2024-09-24 05:13:28', '2024-09-24 05:13:28'),
(519, '176.53.223.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:35', '2024-09-24 05:13:35', '2024-09-24 05:13:35'),
(520, '45.90.61.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:36', '2024-09-24 05:13:36', '2024-09-24 05:13:36'),
(521, '89.104.110.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:39', '2024-09-24 05:13:39', '2024-09-24 05:13:39'),
(522, '45.90.60.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:45', '2024-09-24 05:13:45', '2024-09-24 05:13:45'),
(523, '176.53.217.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:46', '2024-09-24 05:13:46', '2024-09-24 05:13:46'),
(524, '176.53.217.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:48', '2024-09-24 05:13:48', '2024-09-24 05:13:48'),
(525, '176.53.219.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:49', '2024-09-24 05:13:49', '2024-09-24 05:13:49'),
(526, '176.53.221.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:51', '2024-09-24 05:13:51', '2024-09-24 05:13:51'),
(527, '176.53.216.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 05:13:52', '2024-09-24 05:13:52', '2024-09-24 05:13:52'),
(528, '142.93.76.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2024-09-24 05:27:54', '2024-09-24 05:27:54', '2024-09-24 05:27:54'),
(529, '40.77.167.67', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 05:29:08', '2024-09-24 05:29:08', '2024-09-24 05:29:08'),
(530, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 05:41:10', '2024-09-24 05:41:10', '2024-09-24 05:41:10'),
(531, '67.217.228.73', 'python-requests/2.31.0', '2024-09-24 06:47:54', '2024-09-24 06:47:54', '2024-09-24 06:47:54'),
(532, '40.77.167.24', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 08:16:54', '2024-09-24 08:16:54', '2024-09-24 08:16:54'),
(533, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-24 08:32:46', '2024-09-24 08:32:46', '2024-09-24 08:32:46'),
(534, '208.100.26.244', 'Mozilla/5.0 (Android 7.0; Mobile; rv:65.0) Gecko/65.0 Firefox/65.0', '2024-09-24 09:39:14', '2024-09-24 09:39:14', '2024-09-24 09:39:14'),
(535, '208.100.26.249', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.3; WOW64; Trident/6.0)', '2024-09-24 09:39:31', '2024-09-24 09:39:31', '2024-09-24 09:39:31'),
(536, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-24 11:34:27', '2024-09-24 11:34:27', '2024-09-24 11:34:27'),
(537, '128.199.221.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-24 11:43:52', '2024-09-24 11:43:52', '2024-09-24 11:43:52'),
(538, '157.245.48.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-24 12:19:54', '2024-09-24 12:19:54', '2024-09-24 12:19:54'),
(539, '104.152.52.55', 'curl/7.61.1', '2024-09-24 12:31:44', '2024-09-24 12:31:44', '2024-09-24 12:31:44'),
(540, '104.152.52.66', 'curl/7.61.1', '2024-09-24 12:31:44', '2024-09-24 12:31:44', '2024-09-24 12:31:44'),
(541, '176.53.223.148', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 12:42:21', '2024-09-24 12:42:21', '2024-09-24 12:42:21'),
(542, '176.53.222.55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 12:42:22', '2024-09-24 12:42:22', '2024-09-24 12:42:22'),
(543, '66.249.66.205', 'Googlebot/2.1 (+http://www.google.com/bot.html)', '2024-09-24 12:51:28', '2024-09-24 12:51:28', '2024-09-24 12:51:28'),
(544, '66.249.66.205', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 12:58:43', '2024-09-24 12:58:43', '2024-09-24 12:58:43'),
(545, '43.130.7.211', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-24 13:00:03', '2024-09-24 13:00:03', '2024-09-24 13:00:03'),
(546, '40.77.167.72', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 14:09:49', '2024-09-24 14:09:49', '2024-09-24 14:09:49'),
(547, '78.243.169.178', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2024-09-24 14:30:02', '2024-09-24 14:30:02', '2024-09-24 14:30:02'),
(548, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-24 14:58:53', '2024-09-24 14:58:53', '2024-09-24 14:58:53'),
(549, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-24 14:58:55', '2024-09-24 14:58:55', '2024-09-24 14:58:55'),
(550, '223.15.245.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-24 15:04:56', '2024-09-24 15:04:56', '2024-09-24 15:04:56'),
(551, '45.90.60.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:26:58', '2024-09-24 16:26:58', '2024-09-24 16:26:58'),
(552, '176.53.219.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:26:59', '2024-09-24 16:26:59', '2024-09-24 16:26:59'),
(553, '206.168.34.49', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-24 16:28:01', '2024-09-24 16:28:01', '2024-09-24 16:28:01'),
(554, '89.104.110.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:39', '2024-09-24 16:47:39', '2024-09-24 16:47:39'),
(555, '89.104.100.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:40', '2024-09-24 16:47:40', '2024-09-24 16:47:40'),
(556, '89.104.110.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:41', '2024-09-24 16:47:41', '2024-09-24 16:47:41'),
(557, '176.53.220.200', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:44', '2024-09-24 16:47:44', '2024-09-24 16:47:44'),
(558, '89.104.101.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:46', '2024-09-24 16:47:46', '2024-09-24 16:47:46'),
(559, '89.104.100.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:49', '2024-09-24 16:47:49', '2024-09-24 16:47:49'),
(560, '89.104.111.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:50', '2024-09-24 16:47:50', '2024-09-24 16:47:50'),
(561, '176.53.221.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-24 16:47:51', '2024-09-24 16:47:51', '2024-09-24 16:47:51'),
(562, '199.45.154.144', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-24 17:18:39', '2024-09-24 17:18:39', '2024-09-24 17:18:39'),
(563, '188.241.80.69', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-24 17:52:06', '2024-09-24 17:52:06', '2024-09-24 17:52:06'),
(564, '188.241.80.69', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-24 17:52:11', '2024-09-24 17:52:11', '2024-09-24 17:52:11'),
(565, '65.181.111.249', NULL, '2024-09-24 18:01:14', '2024-09-24 18:01:14', '2024-09-24 18:01:14'),
(566, '172.176.75.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6523.4 Safari/537.36', '2024-09-24 18:21:26', '2024-09-24 18:21:26', '2024-09-24 18:21:26'),
(567, '173.252.87.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-24 18:36:11', '2024-09-24 18:36:11', '2024-09-24 18:36:11'),
(568, '173.252.95.13', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-24 18:36:11', '2024-09-24 18:36:11', '2024-09-24 18:36:11'),
(569, '69.171.231.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-24 18:36:16', '2024-09-24 18:36:16', '2024-09-24 18:36:16'),
(570, '31.13.103.8', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-24 18:36:16', '2024-09-24 18:36:16', '2024-09-24 18:36:16'),
(571, '173.252.95.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-24 18:36:16', '2024-09-24 18:36:16', '2024-09-24 18:36:16'),
(572, '52.167.144.174', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 18:53:41', '2024-09-24 18:53:41', '2024-09-24 18:53:41'),
(573, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 19:02:28', '2024-09-24 19:02:28', '2024-09-24 19:02:28'),
(574, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 19:27:01', '2024-09-24 19:27:01', '2024-09-24 19:27:01'),
(575, '159.89.187.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-24 19:28:20', '2024-09-24 19:28:20', '2024-09-24 19:28:20'),
(576, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-24 19:56:29', '2024-09-24 19:56:29', '2024-09-24 19:56:29'),
(577, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-24 19:56:35', '2024-09-24 19:56:35', '2024-09-24 19:56:35'),
(578, '52.167.144.239', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-24 20:40:33', '2024-09-24 20:40:33', '2024-09-24 20:40:33'),
(579, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 20:57:01', '2024-09-24 20:57:01', '2024-09-24 20:57:01'),
(580, '66.249.66.200', 'Googlebot-Image/1.0', '2024-09-24 21:03:43', '2024-09-24 21:03:43', '2024-09-24 21:03:43'),
(581, '185.191.171.15', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-24 21:16:07', '2024-09-24 21:16:07', '2024-09-24 21:16:07'),
(582, '66.249.66.207', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-24 21:34:05', '2024-09-24 21:34:05', '2024-09-24 21:34:05'),
(583, '85.208.96.197', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-24 21:35:26', '2024-09-24 21:35:26', '2024-09-24 21:35:26'),
(584, '66.249.66.206', 'Googlebot-Image/1.0', '2024-09-24 21:39:15', '2024-09-24 21:39:15', '2024-09-24 21:39:15'),
(585, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-24 22:02:27', '2024-09-24 22:02:27', '2024-09-24 22:02:27'),
(586, '85.208.96.210', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-24 22:05:38', '2024-09-24 22:05:38', '2024-09-24 22:05:38'),
(587, '46.4.33.48', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.1) Gecko/2008070208', '2024-09-24 22:22:13', '2024-09-24 22:22:13', '2024-09-24 22:22:13'),
(588, '34.34.253.53', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36', '2024-09-24 22:26:32', '2024-09-24 22:26:32', '2024-09-24 22:26:32'),
(589, '34.34.253.53', 'python-requests/2.31.0', '2024-09-24 22:26:37', '2024-09-24 22:26:37', '2024-09-24 22:26:37'),
(590, '185.191.171.18', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-24 22:57:57', '2024-09-24 22:57:57', '2024-09-24 22:57:57'),
(591, '66.249.66.201', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-24 23:03:45', '2024-09-24 23:03:45', '2024-09-24 23:03:45'),
(592, '66.249.66.206', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-24 23:33:44', '2024-09-24 23:33:44', '2024-09-24 23:33:44'),
(593, '85.208.96.200', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 00:11:30', '2024-09-25 00:11:30', '2024-09-25 00:11:30'),
(594, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 00:20:45', '2024-09-25 00:20:45', '2024-09-25 00:20:45'),
(595, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-25 00:20:47', '2024-09-25 00:20:47', '2024-09-25 00:20:47'),
(596, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 01:02:27', '2024-09-25 01:02:27', '2024-09-25 01:02:27'),
(597, '20.99.210.66', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', '2024-09-25 01:02:38', '2024-09-25 01:02:38', '2024-09-25 01:02:38'),
(598, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 01:22:28', '2024-09-25 01:22:28', '2024-09-25 01:22:28'),
(599, '20.240.18.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', '2024-09-25 01:40:20', '2024-09-25 01:40:20', '2024-09-25 01:40:20'),
(600, '85.208.96.209', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 01:44:40', '2024-09-25 01:44:40', '2024-09-25 01:44:40'),
(601, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 02:32:27', '2024-09-25 02:32:27', '2024-09-25 02:32:27'),
(602, '27.147.177.102', NULL, '2024-09-25 02:47:57', '2024-09-25 02:47:57', '2024-09-25 02:47:57'),
(603, '66.249.66.206', 'Googlebot/2.1 (+http://www.google.com/bot.html)', '2024-09-25 03:06:15', '2024-09-25 03:06:15', '2024-09-25 03:06:15'),
(604, '176.53.222.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:47', '2024-09-25 03:20:47', '2024-09-25 03:20:47'),
(605, '89.104.111.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:48', '2024-09-25 03:20:48', '2024-09-25 03:20:48'),
(606, '89.104.110.129', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:50', '2024-09-25 03:20:50', '2024-09-25 03:20:50'),
(607, '45.90.61.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:50', '2024-09-25 03:20:50', '2024-09-25 03:20:50'),
(608, '176.53.221.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:51', '2024-09-25 03:20:51', '2024-09-25 03:20:51'),
(609, '176.53.218.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:52', '2024-09-25 03:20:52', '2024-09-25 03:20:52'),
(610, '45.90.63.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:55', '2024-09-25 03:20:55', '2024-09-25 03:20:55'),
(611, '176.53.221.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:56', '2024-09-25 03:20:56', '2024-09-25 03:20:56'),
(612, '45.90.63.182', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:58', '2024-09-25 03:20:58', '2024-09-25 03:20:58'),
(613, '176.53.220.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:20:59', '2024-09-25 03:20:59', '2024-09-25 03:20:59'),
(614, '89.104.101.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:06', '2024-09-25 03:21:06', '2024-09-25 03:21:06'),
(615, '45.90.61.229', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:07', '2024-09-25 03:21:07', '2024-09-25 03:21:07'),
(616, '89.104.110.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:09', '2024-09-25 03:21:09', '2024-09-25 03:21:09'),
(617, '89.104.100.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:09', '2024-09-25 03:21:09', '2024-09-25 03:21:09'),
(618, '89.104.110.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:09', '2024-09-25 03:21:09', '2024-09-25 03:21:09'),
(619, '176.53.221.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:10', '2024-09-25 03:21:10', '2024-09-25 03:21:10'),
(620, '45.90.62.67', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:12', '2024-09-25 03:21:12', '2024-09-25 03:21:12'),
(621, '176.53.218.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:12', '2024-09-25 03:21:12', '2024-09-25 03:21:12'),
(622, '89.104.111.255', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:15', '2024-09-25 03:21:15', '2024-09-25 03:21:15'),
(623, '89.104.101.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:16', '2024-09-25 03:21:16', '2024-09-25 03:21:16'),
(624, '89.104.111.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:20', '2024-09-25 03:21:20', '2024-09-25 03:21:20'),
(625, '176.53.222.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:25', '2024-09-25 03:21:25', '2024-09-25 03:21:25'),
(626, '89.104.111.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:26', '2024-09-25 03:21:26', '2024-09-25 03:21:26'),
(627, '45.90.61.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:28', '2024-09-25 03:21:28', '2024-09-25 03:21:28'),
(628, '176.53.223.245', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:28', '2024-09-25 03:21:28', '2024-09-25 03:21:28'),
(629, '45.90.63.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:30', '2024-09-25 03:21:30', '2024-09-25 03:21:30'),
(630, '176.53.222.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:31', '2024-09-25 03:21:31', '2024-09-25 03:21:31'),
(631, '89.104.110.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:33', '2024-09-25 03:21:33', '2024-09-25 03:21:33'),
(632, '176.53.220.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:34', '2024-09-25 03:21:34', '2024-09-25 03:21:34'),
(633, '45.90.61.155', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:44', '2024-09-25 03:21:44', '2024-09-25 03:21:44'),
(634, '176.53.219.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:45', '2024-09-25 03:21:45', '2024-09-25 03:21:45'),
(635, '89.104.100.70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:46', '2024-09-25 03:21:46', '2024-09-25 03:21:46'),
(636, '45.90.62.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:48', '2024-09-25 03:21:48', '2024-09-25 03:21:48'),
(637, '89.104.100.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:48', '2024-09-25 03:21:48', '2024-09-25 03:21:48'),
(638, '89.104.100.17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:50', '2024-09-25 03:21:50', '2024-09-25 03:21:50'),
(639, '176.53.220.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:50', '2024-09-25 03:21:50', '2024-09-25 03:21:50'),
(640, '176.53.217.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:52', '2024-09-25 03:21:52', '2024-09-25 03:21:52'),
(641, '176.53.218.185', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:53', '2024-09-25 03:21:53', '2024-09-25 03:21:53'),
(642, '176.53.216.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:55', '2024-09-25 03:21:55', '2024-09-25 03:21:55'),
(643, '176.53.217.95', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:56', '2024-09-25 03:21:56', '2024-09-25 03:21:56'),
(644, '176.53.221.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:58', '2024-09-25 03:21:58', '2024-09-25 03:21:58'),
(645, '45.90.60.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:21:59', '2024-09-25 03:21:59', '2024-09-25 03:21:59'),
(646, '176.53.223.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:00', '2024-09-25 03:22:00', '2024-09-25 03:22:00'),
(647, '176.53.223.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:02', '2024-09-25 03:22:02', '2024-09-25 03:22:02'),
(648, '176.53.219.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:03', '2024-09-25 03:22:03', '2024-09-25 03:22:03'),
(649, '45.90.63.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:05', '2024-09-25 03:22:05', '2024-09-25 03:22:05'),
(650, '89.104.111.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:06', '2024-09-25 03:22:06', '2024-09-25 03:22:06'),
(651, '176.53.216.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:08', '2024-09-25 03:22:08', '2024-09-25 03:22:08'),
(652, '45.90.62.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:09', '2024-09-25 03:22:09', '2024-09-25 03:22:09'),
(653, '89.104.111.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:11', '2024-09-25 03:22:11', '2024-09-25 03:22:11'),
(654, '176.53.221.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:13', '2024-09-25 03:22:13', '2024-09-25 03:22:13'),
(655, '89.104.100.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:14', '2024-09-25 03:22:14', '2024-09-25 03:22:14'),
(656, '89.104.110.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:16', '2024-09-25 03:22:16', '2024-09-25 03:22:16'),
(657, '89.104.100.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:17', '2024-09-25 03:22:17', '2024-09-25 03:22:17'),
(658, '176.53.220.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:19', '2024-09-25 03:22:19', '2024-09-25 03:22:19'),
(659, '176.53.217.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:20', '2024-09-25 03:22:20', '2024-09-25 03:22:20'),
(660, '176.53.220.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:30', '2024-09-25 03:22:30', '2024-09-25 03:22:30'),
(661, '176.53.220.200', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:32', '2024-09-25 03:22:32', '2024-09-25 03:22:32'),
(662, '176.53.216.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:32', '2024-09-25 03:22:32', '2024-09-25 03:22:32'),
(663, '176.53.217.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:33', '2024-09-25 03:22:33', '2024-09-25 03:22:33'),
(664, '176.53.217.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:34', '2024-09-25 03:22:34', '2024-09-25 03:22:34'),
(665, '176.53.219.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:35', '2024-09-25 03:22:35', '2024-09-25 03:22:35'),
(666, '45.90.61.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:36', '2024-09-25 03:22:36', '2024-09-25 03:22:36'),
(667, '176.53.222.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:38', '2024-09-25 03:22:38', '2024-09-25 03:22:38'),
(668, '176.53.216.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 03:22:41', '2024-09-25 03:22:41', '2024-09-25 03:22:41'),
(669, '103.190.83.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', '2024-09-25 03:29:08', '2024-09-25 03:29:08', '2024-09-25 03:29:08'),
(670, '85.208.96.193', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 04:01:19', '2024-09-25 04:01:19', '2024-09-25 04:01:19'),
(671, '185.191.171.2', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 04:27:59', '2024-09-25 04:27:59', '2024-09-25 04:27:59'),
(672, '202.134.10.133', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-25 05:00:22', '2024-09-25 05:00:22', '2024-09-25 05:00:22'),
(673, '43.153.93.68', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-25 05:00:33', '2024-09-25 05:00:33', '2024-09-25 05:00:33'),
(674, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 05:32:27', '2024-09-25 05:32:27', '2024-09-25 05:32:27'),
(675, '185.191.171.14', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 05:43:59', '2024-09-25 05:43:59', '2024-09-25 05:43:59'),
(676, '185.191.171.3', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 06:02:25', '2024-09-25 06:02:25', '2024-09-25 06:02:25'),
(677, '66.249.66.206', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 06:17:27', '2024-09-25 06:17:27', '2024-09-25 06:17:27'),
(678, '66.249.66.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 06:19:17', '2024-09-25 06:19:17', '2024-09-25 06:19:17'),
(679, '66.249.66.208', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 06:19:17', '2024-09-25 06:19:17', '2024-09-25 06:19:17'),
(680, '85.208.96.208', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 06:50:55', '2024-09-25 06:50:55', '2024-09-25 06:50:55'),
(681, '179.43.152.66', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', '2024-09-25 07:08:54', '2024-09-25 07:08:54', '2024-09-25 07:08:54'),
(682, '52.167.144.218', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 07:32:54', '2024-09-25 07:32:54', '2024-09-25 07:32:54'),
(683, '103.239.4.166', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-25 07:43:19', '2024-09-25 07:43:19', '2024-09-25 07:43:19'),
(684, '185.191.171.12', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 07:48:22', '2024-09-25 07:48:22', '2024-09-25 07:48:22'),
(685, '52.167.144.231', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 07:59:27', '2024-09-25 07:59:27', '2024-09-25 07:59:27'),
(686, '51.158.110.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.76', '2024-09-25 08:02:27', '2024-09-25 08:02:27', '2024-09-25 08:02:27'),
(687, '94.247.172.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2)', '2024-09-25 08:14:08', '2024-09-25 08:14:08', '2024-09-25 08:14:08'),
(688, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 08:31:56', '2024-09-25 08:31:56', '2024-09-25 08:31:56'),
(689, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-25 08:32:46', '2024-09-25 08:32:46', '2024-09-25 08:32:46'),
(690, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-25 08:57:26', '2024-09-25 08:57:26', '2024-09-25 08:57:26'),
(691, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-25 09:22:08', '2024-09-25 09:22:08', '2024-09-25 09:22:08'),
(692, '69.167.30.16', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-25 09:25:31', '2024-09-25 09:25:31', '2024-09-25 09:25:31'),
(693, '85.208.96.202', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 09:43:49', '2024-09-25 09:43:49', '2024-09-25 09:43:49'),
(694, '85.208.96.198', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-25 09:50:41', '2024-09-25 09:50:41', '2024-09-25 09:50:41'),
(695, '40.77.167.76', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 10:07:17', '2024-09-25 10:07:17', '2024-09-25 10:07:17'),
(696, '69.167.30.16', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-25 10:13:48', '2024-09-25 10:13:48', '2024-09-25 10:13:48'),
(697, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-25 10:46:44', '2024-09-25 10:46:44', '2024-09-25 10:46:44'),
(698, '87.236.176.23', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 11:46:58', '2024-09-25 11:46:58', '2024-09-25 11:46:58'),
(699, '87.236.176.128', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 11:48:12', '2024-09-25 11:48:12', '2024-09-25 11:48:12'),
(700, '167.99.209.184', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 11:48:13', '2024-09-25 11:48:13', '2024-09-25 11:48:13'),
(701, '185.107.57.64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2024-09-25 11:48:28', '2024-09-25 11:48:28', '2024-09-25 11:48:28'),
(702, '89.104.111.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 12:22:38', '2024-09-25 12:22:38', '2024-09-25 12:22:38'),
(703, '89.104.110.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 12:22:40', '2024-09-25 12:22:40', '2024-09-25 12:22:40'),
(704, '34.83.119.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-25 12:43:37', '2024-09-25 12:43:37', '2024-09-25 12:43:37'),
(705, '34.79.54.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:52.0) Gecko/20100101 Firefox/52.0', '2024-09-25 13:07:52', '2024-09-25 13:07:52', '2024-09-25 13:07:52'),
(706, '180.102.134.69', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-25 13:18:17', '2024-09-25 13:18:17', '2024-09-25 13:18:17'),
(707, '152.89.198.68', 'Mozilla/5.0 (Windows NT 10.0.0; Win64; x64; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.93 Chrome/124.0.6367.93 Not-A.Brand/99  Safari/537.36', '2024-09-25 14:41:20', '2024-09-25 14:41:20', '2024-09-25 14:41:20'),
(708, '40.77.167.56', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 15:35:27', '2024-09-25 15:35:27', '2024-09-25 15:35:27'),
(709, '45.90.60.128', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 16:11:56', '2024-09-25 16:11:56', '2024-09-25 16:11:56'),
(710, '176.53.223.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 16:12:00', '2024-09-25 16:12:00', '2024-09-25 16:12:00'),
(711, '176.53.219.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 16:12:03', '2024-09-25 16:12:03', '2024-09-25 16:12:03'),
(712, '45.90.63.232', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 16:12:04', '2024-09-25 16:12:04', '2024-09-25 16:12:04'),
(713, '89.104.100.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-25 16:12:06', '2024-09-25 16:12:06', '2024-09-25 16:12:06'),
(714, '40.77.167.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 16:26:35', '2024-09-25 16:26:35', '2024-09-25 16:26:35'),
(715, '40.77.167.53', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 16:55:50', '2024-09-25 16:55:50', '2024-09-25 16:55:50'),
(716, '34.79.236.166', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:52.0) Gecko/20100101 Firefox/52.0', '2024-09-25 17:05:35', '2024-09-25 17:05:35', '2024-09-25 17:05:35'),
(717, '34.79.236.166', 'Python/3.11 aiohttp/3.10.5', '2024-09-25 17:08:13', '2024-09-25 17:08:13', '2024-09-25 17:08:13'),
(718, '87.236.176.157', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 18:00:33', '2024-09-25 18:00:33', '2024-09-25 18:00:33'),
(719, '87.236.176.121', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 18:00:41', '2024-09-25 18:00:41', '2024-09-25 18:00:41'),
(720, '157.245.216.203', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-25 18:00:42', '2024-09-25 18:00:42', '2024-09-25 18:00:42'),
(721, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 18:04:10', '2024-09-25 18:04:10', '2024-09-25 18:04:10'),
(722, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 18:09:10', '2024-09-25 18:09:10', '2024-09-25 18:09:10'),
(723, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 18:13:10', '2024-09-25 18:13:10', '2024-09-25 18:13:10'),
(724, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 18:22:10', '2024-09-25 18:22:10', '2024-09-25 18:22:10'),
(725, '190.92.209.209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.47', '2024-09-25 18:26:09', '2024-09-25 18:26:09', '2024-09-25 18:26:09'),
(726, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 18:42:57', '2024-09-25 18:42:57', '2024-09-25 18:42:57'),
(727, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 19:34:10', '2024-09-25 19:34:10', '2024-09-25 19:34:10'),
(728, '179.43.149.114', 'Go-http-client/1.1', '2024-09-25 19:38:49', '2024-09-25 19:38:49', '2024-09-25 19:38:49'),
(729, '66.249.66.206', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 19:45:07', '2024-09-25 19:45:07', '2024-09-25 19:45:07'),
(730, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 19:45:07', '2024-09-25 19:45:07', '2024-09-25 19:45:07'),
(731, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-25 20:16:58', '2024-09-25 20:16:58', '2024-09-25 20:16:58'),
(732, '104.197.69.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/92.0.4515.159 Safari/537.36', '2024-09-25 20:32:49', '2024-09-25 20:32:49', '2024-09-25 20:32:49'),
(733, '27.147.177.102', NULL, '2024-09-25 20:58:25', '2024-09-25 20:58:25', '2024-09-25 20:58:25'),
(734, '40.77.167.235', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 21:10:20', '2024-09-25 21:10:20', '2024-09-25 21:10:20'),
(735, '49.51.233.46', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-25 21:42:02', '2024-09-25 21:42:02', '2024-09-25 21:42:02'),
(736, '40.77.167.43', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-25 22:04:36', '2024-09-25 22:04:36', '2024-09-25 22:04:36'),
(737, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-25 22:28:04', '2024-09-25 22:28:04', '2024-09-25 22:28:04'),
(738, '154.216.17.66', 'Mozilla/5.0 (Linux; Android 8.0.0; moto e5 cruise Build/OCPS27.91-157-12) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36', '2024-09-25 23:29:10', '2024-09-25 23:29:10', '2024-09-25 23:29:10'),
(739, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-25 23:50:04', '2024-09-25 23:50:04', '2024-09-25 23:50:04'),
(740, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-25 23:51:29', '2024-09-25 23:51:29', '2024-09-25 23:51:29'),
(741, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-26 00:04:33', '2024-09-26 00:04:33', '2024-09-26 00:04:33');
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(742, '154.28.222.214', 'Mozilla/5.0 (iPad; CPU OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2024-09-26 00:10:32', '2024-09-26 00:10:32', '2024-09-26 00:10:32'),
(743, '43.136.50.243', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '2024-09-26 00:45:27', '2024-09-26 00:45:27', '2024-09-26 00:45:27'),
(744, '207.46.13.87', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 00:55:59', '2024-09-26 00:55:59', '2024-09-26 00:55:59'),
(745, '135.148.100.196', NULL, '2024-09-26 01:24:52', '2024-09-26 01:24:52', '2024-09-26 01:24:52'),
(746, '164.92.244.132', NULL, '2024-09-26 01:35:26', '2024-09-26 01:35:26', '2024-09-26 01:35:26'),
(747, '164.92.244.132', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-26 01:35:26', '2024-09-26 01:35:26', '2024-09-26 01:35:26'),
(748, '164.92.244.132', 'Go-http-client/1.1', '2024-09-26 01:35:27', '2024-09-26 01:35:27', '2024-09-26 01:35:27'),
(749, '164.92.244.132', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-26 01:35:31', '2024-09-26 01:35:31', '2024-09-26 01:35:31'),
(750, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-26 01:36:09', '2024-09-26 01:36:09', '2024-09-26 01:36:09'),
(751, '40.84.221.210', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', '2024-09-26 01:39:53', '2024-09-26 01:39:53', '2024-09-26 01:39:53'),
(752, '51.8.102.131', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; OAI-SearchBot/1.0; +https://openai.com/searchbot', '2024-09-26 01:51:41', '2024-09-26 01:51:41', '2024-09-26 01:51:41'),
(753, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-26 02:04:16', '2024-09-26 02:04:16', '2024-09-26 02:04:16'),
(754, '87.236.176.169', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 02:19:59', '2024-09-26 02:19:59', '2024-09-26 02:19:59'),
(755, '87.236.176.133', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 02:20:01', '2024-09-26 02:20:01', '2024-09-26 02:20:01'),
(756, '104.248.204.195', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 02:20:01', '2024-09-26 02:20:01', '2024-09-26 02:20:01'),
(757, '185.220.101.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2024-09-26 02:20:02', '2024-09-26 02:20:02', '2024-09-26 02:20:02'),
(758, '104.166.80.190', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', '2024-09-26 03:58:59', '2024-09-26 03:58:59', '2024-09-26 03:58:59'),
(759, '45.90.60.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:17', '2024-09-26 04:09:17', '2024-09-26 04:09:17'),
(760, '176.53.222.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:18', '2024-09-26 04:09:18', '2024-09-26 04:09:18'),
(761, '45.90.61.229', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:21', '2024-09-26 04:09:21', '2024-09-26 04:09:21'),
(762, '45.90.62.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:24', '2024-09-26 04:09:24', '2024-09-26 04:09:24'),
(763, '89.104.100.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:24', '2024-09-26 04:09:24', '2024-09-26 04:09:24'),
(764, '89.104.110.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:27', '2024-09-26 04:09:27', '2024-09-26 04:09:27'),
(765, '45.90.62.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:29', '2024-09-26 04:09:29', '2024-09-26 04:09:29'),
(766, '45.90.63.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:31', '2024-09-26 04:09:31', '2024-09-26 04:09:31'),
(767, '176.53.223.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:31', '2024-09-26 04:09:31', '2024-09-26 04:09:31'),
(768, '89.104.111.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:33', '2024-09-26 04:09:33', '2024-09-26 04:09:33'),
(769, '176.53.219.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:35', '2024-09-26 04:09:35', '2024-09-26 04:09:35'),
(770, '89.104.110.209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:37', '2024-09-26 04:09:37', '2024-09-26 04:09:37'),
(771, '45.90.62.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:44', '2024-09-26 04:09:44', '2024-09-26 04:09:44'),
(772, '89.104.110.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:45', '2024-09-26 04:09:45', '2024-09-26 04:09:45'),
(773, '176.53.217.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:46', '2024-09-26 04:09:46', '2024-09-26 04:09:46'),
(774, '45.90.62.187', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:47', '2024-09-26 04:09:47', '2024-09-26 04:09:47'),
(775, '176.53.223.111', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:49', '2024-09-26 04:09:49', '2024-09-26 04:09:49'),
(776, '176.53.222.225', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:50', '2024-09-26 04:09:50', '2024-09-26 04:09:50'),
(777, '176.53.222.202', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:52', '2024-09-26 04:09:52', '2024-09-26 04:09:52'),
(778, '176.53.220.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:52', '2024-09-26 04:09:52', '2024-09-26 04:09:52'),
(779, '176.53.223.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:54', '2024-09-26 04:09:54', '2024-09-26 04:09:54'),
(780, '176.53.216.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:55', '2024-09-26 04:09:55', '2024-09-26 04:09:55'),
(781, '89.104.110.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:09:59', '2024-09-26 04:09:59', '2024-09-26 04:09:59'),
(782, '176.53.223.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:00', '2024-09-26 04:10:00', '2024-09-26 04:10:00'),
(783, '89.104.110.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:05', '2024-09-26 04:10:05', '2024-09-26 04:10:05'),
(784, '176.53.218.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:06', '2024-09-26 04:10:06', '2024-09-26 04:10:06'),
(785, '176.53.216.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:07', '2024-09-26 04:10:07', '2024-09-26 04:10:07'),
(786, '45.90.63.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:12', '2024-09-26 04:10:12', '2024-09-26 04:10:12'),
(787, '45.90.63.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:12', '2024-09-26 04:10:12', '2024-09-26 04:10:12'),
(788, '89.104.111.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:16', '2024-09-26 04:10:16', '2024-09-26 04:10:16'),
(789, '45.90.60.192', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:20', '2024-09-26 04:10:20', '2024-09-26 04:10:20'),
(790, '176.53.218.247', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:24', '2024-09-26 04:10:24', '2024-09-26 04:10:24'),
(791, '176.53.216.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:24', '2024-09-26 04:10:24', '2024-09-26 04:10:24'),
(792, '176.53.220.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:27', '2024-09-26 04:10:27', '2024-09-26 04:10:27'),
(793, '45.90.62.151', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:28', '2024-09-26 04:10:28', '2024-09-26 04:10:28'),
(794, '154.223.139.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:30', '2024-09-26 04:10:30', '2024-09-26 04:10:30'),
(795, '176.53.223.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:31', '2024-09-26 04:10:31', '2024-09-26 04:10:31'),
(796, '176.53.220.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:33', '2024-09-26 04:10:33', '2024-09-26 04:10:33'),
(797, '45.90.61.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:34', '2024-09-26 04:10:34', '2024-09-26 04:10:34'),
(798, '45.90.62.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:38', '2024-09-26 04:10:38', '2024-09-26 04:10:38'),
(799, '176.53.222.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:41', '2024-09-26 04:10:41', '2024-09-26 04:10:41'),
(800, '89.104.111.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:50', '2024-09-26 04:10:50', '2024-09-26 04:10:50'),
(801, '176.53.222.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:51', '2024-09-26 04:10:51', '2024-09-26 04:10:51'),
(802, '176.53.221.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:52', '2024-09-26 04:10:52', '2024-09-26 04:10:52'),
(803, '89.104.101.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:54', '2024-09-26 04:10:54', '2024-09-26 04:10:54'),
(804, '176.53.221.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:54', '2024-09-26 04:10:54', '2024-09-26 04:10:54'),
(805, '89.104.110.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:56', '2024-09-26 04:10:56', '2024-09-26 04:10:56'),
(806, '176.53.221.239', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:10:57', '2024-09-26 04:10:57', '2024-09-26 04:10:57'),
(807, '89.104.101.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:02', '2024-09-26 04:11:02', '2024-09-26 04:11:02'),
(808, '176.53.216.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:04', '2024-09-26 04:11:04', '2024-09-26 04:11:04'),
(809, '89.104.100.46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:08', '2024-09-26 04:11:08', '2024-09-26 04:11:08'),
(810, '45.90.63.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:08', '2024-09-26 04:11:08', '2024-09-26 04:11:08'),
(811, '89.104.110.70', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:10', '2024-09-26 04:11:10', '2024-09-26 04:11:10'),
(812, '45.90.61.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:11', '2024-09-26 04:11:11', '2024-09-26 04:11:11'),
(813, '176.53.221.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:16', '2024-09-26 04:11:16', '2024-09-26 04:11:16'),
(814, '176.53.217.19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:18', '2024-09-26 04:11:18', '2024-09-26 04:11:18'),
(815, '45.90.60.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:19', '2024-09-26 04:11:19', '2024-09-26 04:11:19'),
(816, '176.53.220.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:20', '2024-09-26 04:11:20', '2024-09-26 04:11:20'),
(817, '89.104.101.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:21', '2024-09-26 04:11:21', '2024-09-26 04:11:21'),
(818, '176.53.220.192', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:23', '2024-09-26 04:11:23', '2024-09-26 04:11:23'),
(819, '89.104.100.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:26', '2024-09-26 04:11:26', '2024-09-26 04:11:26'),
(820, '45.90.61.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:27', '2024-09-26 04:11:27', '2024-09-26 04:11:27'),
(821, '176.53.216.204', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:28', '2024-09-26 04:11:28', '2024-09-26 04:11:28'),
(822, '176.53.217.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:30', '2024-09-26 04:11:30', '2024-09-26 04:11:30'),
(823, '45.90.60.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:31', '2024-09-26 04:11:31', '2024-09-26 04:11:31'),
(824, '45.90.63.55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:33', '2024-09-26 04:11:33', '2024-09-26 04:11:33'),
(825, '176.53.221.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:33', '2024-09-26 04:11:33', '2024-09-26 04:11:33'),
(826, '89.104.100.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 04:11:35', '2024-09-26 04:11:35', '2024-09-26 04:11:35'),
(827, '205.169.39.208', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2024-09-26 04:17:55', '2024-09-26 04:17:55', '2024-09-26 04:17:55'),
(828, '45.148.10.206', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:14.0) Gecko/20100101 Firefox/14.0.1', '2024-09-26 04:25:45', '2024-09-26 04:25:45', '2024-09-26 04:25:45'),
(829, '212.111.80.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.61 Chrome/124.0.6367.61 Not-A.Brand/99  Safari/537.36', '2024-09-26 04:44:23', '2024-09-26 04:44:23', '2024-09-26 04:44:23'),
(830, '139.59.136.184', NULL, '2024-09-26 04:53:49', '2024-09-26 04:53:49', '2024-09-26 04:53:49'),
(831, '139.59.136.184', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-26 04:53:54', '2024-09-26 04:53:54', '2024-09-26 04:53:54'),
(832, '139.59.136.184', 'Go-http-client/1.1', '2024-09-26 04:53:55', '2024-09-26 04:53:55', '2024-09-26 04:53:55'),
(833, '139.59.136.184', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-26 04:54:01', '2024-09-26 04:54:01', '2024-09-26 04:54:01'),
(834, '207.46.13.151', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 04:59:28', '2024-09-26 04:59:28', '2024-09-26 04:59:28'),
(835, '20.120.134.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', '2024-09-26 05:10:18', '2024-09-26 05:10:18', '2024-09-26 05:10:18'),
(836, '93.159.230.84', 'Mozilla/5.0 (Linux; arm_64; Android 12; CPH2205) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 YaBrowser/23.3.3.86.00 SA/3 Mobile Safari/537.36', '2024-09-26 05:18:46', '2024-09-26 05:18:46', '2024-09-26 05:18:46'),
(837, '128.199.134.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2024-09-26 05:46:07', '2024-09-26 05:46:07', '2024-09-26 05:46:07'),
(838, '46.228.199.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', '2024-09-26 06:20:03', '2024-09-26 06:20:03', '2024-09-26 06:20:03'),
(839, '2.56.172.165', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) EdgiOS/120.0.2210.141 Version/17.0 Mobile/15E148 Safari/604.1', '2024-09-26 06:28:05', '2024-09-26 06:28:05', '2024-09-26 06:28:05'),
(840, '40.77.167.136', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 06:42:48', '2024-09-26 06:42:48', '2024-09-26 06:42:48'),
(841, '43.136.17.87', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0', '2024-09-26 06:50:13', '2024-09-26 06:50:13', '2024-09-26 06:50:13'),
(842, '103.190.83.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', '2024-09-26 06:52:12', '2024-09-26 06:52:12', '2024-09-26 06:52:12'),
(843, '123.60.68.42', 'Mozilla/5.0 (Windows NT 9.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3386.88 Safari/537.36', '2024-09-26 07:08:56', '2024-09-26 07:08:56', '2024-09-26 07:08:56'),
(844, '103.80.2.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-26 08:45:33', '2024-09-26 08:45:33', '2024-09-26 08:45:33'),
(845, '130.255.166.79', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.1.2 Mobile/15E148 Safari/604', '2024-09-26 08:46:38', '2024-09-26 08:46:38', '2024-09-26 08:46:38'),
(846, '207.46.13.14', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 09:03:37', '2024-09-26 09:03:37', '2024-09-26 09:03:37'),
(847, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-26 09:31:42', '2024-09-26 09:31:42', '2024-09-26 09:31:42'),
(848, '69.167.30.16', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-26 09:32:08', '2024-09-26 09:32:08', '2024-09-26 09:32:08'),
(849, '66.249.66.200', 'Googlebot-Image/1.0', '2024-09-26 09:38:18', '2024-09-26 09:38:18', '2024-09-26 09:38:18'),
(850, '52.149.22.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', '2024-09-26 10:00:36', '2024-09-26 10:00:36', '2024-09-26 10:00:36'),
(851, '157.55.39.6', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 10:19:58', '2024-09-26 10:19:58', '2024-09-26 10:19:58'),
(852, '49.51.36.179', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-26 10:43:52', '2024-09-26 10:43:52', '2024-09-26 10:43:52'),
(853, '66.249.66.206', 'Googlebot-Image/1.0', '2024-09-26 10:57:03', '2024-09-26 10:57:03', '2024-09-26 10:57:03'),
(854, '182.40.104.255', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-26 12:05:26', '2024-09-26 12:05:26', '2024-09-26 12:05:26'),
(855, '199.244.88.218', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2024-09-26 12:09:23', '2024-09-26 12:09:23', '2024-09-26 12:09:23'),
(856, '176.53.217.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 12:24:44', '2024-09-26 12:24:44', '2024-09-26 12:24:44'),
(857, '20.15.133.191', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 12:25:55', '2024-09-26 12:25:55', '2024-09-26 12:25:55'),
(858, '146.190.111.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-26 12:57:21', '2024-09-26 12:57:21', '2024-09-26 12:57:21'),
(859, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-26 13:00:25', '2024-09-26 13:00:25', '2024-09-26 13:00:25'),
(860, '184.95.55.74', 'curl/7.61.1', '2024-09-26 13:19:23', '2024-09-26 13:19:23', '2024-09-26 13:19:23'),
(861, '157.55.39.49', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 13:48:19', '2024-09-26 13:48:19', '2024-09-26 13:48:19'),
(862, '137.226.113.44', 'Mozilla/5.0 researchscan.comsys.rwth-aachen.de', '2024-09-26 14:22:39', '2024-09-26 14:22:39', '2024-09-26 14:22:39'),
(863, '87.236.176.47', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 15:54:46', '2024-09-26 15:54:46', '2024-09-26 15:54:46'),
(864, '87.236.176.5', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 15:54:48', '2024-09-26 15:54:48', '2024-09-26 15:54:48'),
(865, '188.166.26.88', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', '2024-09-26 15:54:49', '2024-09-26 15:54:49', '2024-09-26 15:54:49'),
(866, '192.42.116.219', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2024-09-26 15:54:51', '2024-09-26 15:54:51', '2024-09-26 15:54:51'),
(867, '89.104.101.187', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:39', '2024-09-26 16:04:39', '2024-09-26 16:04:39'),
(868, '45.90.61.221', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:41', '2024-09-26 16:04:41', '2024-09-26 16:04:41'),
(869, '176.53.220.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:42', '2024-09-26 16:04:42', '2024-09-26 16:04:42'),
(870, '89.104.101.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:43', '2024-09-26 16:04:43', '2024-09-26 16:04:43'),
(871, '89.104.101.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:44', '2024-09-26 16:04:44', '2024-09-26 16:04:44'),
(872, '89.104.101.220', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:45', '2024-09-26 16:04:45', '2024-09-26 16:04:45'),
(873, '176.53.219.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-26 16:04:48', '2024-09-26 16:04:48', '2024-09-26 16:04:48'),
(874, '40.77.167.20', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 16:12:44', '2024-09-26 16:12:44', '2024-09-26 16:12:44'),
(875, '157.55.39.11', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 17:11:40', '2024-09-26 17:11:40', '2024-09-26 17:11:40'),
(876, '207.46.13.127', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 17:16:20', '2024-09-26 17:16:20', '2024-09-26 17:16:20'),
(877, '157.55.39.48', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 17:22:22', '2024-09-26 17:22:22', '2024-09-26 17:22:22'),
(878, '207.46.13.126', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 17:28:41', '2024-09-26 17:28:41', '2024-09-26 17:28:41'),
(879, '65.181.111.249', NULL, '2024-09-26 18:01:21', '2024-09-26 18:01:21', '2024-09-26 18:01:21'),
(880, '207.46.13.116', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 18:22:56', '2024-09-26 18:22:56', '2024-09-26 18:22:56'),
(881, '5.196.160.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 OPR/89.0.4447.51', '2024-09-26 18:35:50', '2024-09-26 18:35:50', '2024-09-26 18:35:50'),
(882, '103.80.2.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-26 18:45:00', '2024-09-26 18:45:00', '2024-09-26 18:45:00'),
(883, '104.248.6.165', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-26 19:20:25', '2024-09-26 19:20:25', '2024-09-26 19:20:25'),
(884, '66.249.75.128', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-26 19:23:29', '2024-09-26 19:23:29', '2024-09-26 19:23:29'),
(885, '207.46.13.124', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 19:42:27', '2024-09-26 19:42:27', '2024-09-26 19:42:27'),
(886, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-26 20:09:01', '2024-09-26 20:09:01', '2024-09-26 20:09:01'),
(887, '157.55.39.6', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 20:36:45', '2024-09-26 20:36:45', '2024-09-26 20:36:45'),
(888, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-26 21:03:29', '2024-09-26 21:03:29', '2024-09-26 21:03:29'),
(889, '66.249.66.200', 'Googlebot/2.1 (+http://www.google.com/bot.html)', '2024-09-26 21:37:49', '2024-09-26 21:37:49', '2024-09-26 21:37:49'),
(890, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-26 21:41:58', '2024-09-26 21:41:58', '2024-09-26 21:41:58'),
(891, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-26 22:25:22', '2024-09-26 22:25:22', '2024-09-26 22:25:22'),
(892, '66.249.66.201', 'Googlebot/2.1 (+http://www.google.com/bot.html)', '2024-09-26 22:26:13', '2024-09-26 22:26:13', '2024-09-26 22:26:13'),
(893, '66.249.66.202', 'Googlebot-Image/1.0', '2024-09-26 22:34:23', '2024-09-26 22:34:23', '2024-09-26 22:34:23'),
(894, '15.204.142.133', 'Mozilla/5.0 (Windows NT 10.0; rv:114.0) Gecko/20100101 Firefox/114.0', '2024-09-26 22:52:18', '2024-09-26 22:52:18', '2024-09-26 22:52:18'),
(895, '135.148.195.9', 'Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0', '2024-09-26 22:52:32', '2024-09-26 22:52:32', '2024-09-26 22:52:32'),
(896, '157.55.39.201', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 22:54:01', '2024-09-26 22:54:01', '2024-09-26 22:54:01'),
(897, '194.38.23.16', 'ALittle Client', '2024-09-26 23:00:05', '2024-09-26 23:00:05', '2024-09-26 23:00:05'),
(898, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-26 23:11:56', '2024-09-26 23:11:56', '2024-09-26 23:11:56'),
(899, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-26 23:12:48', '2024-09-26 23:12:48', '2024-09-26 23:12:48'),
(900, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-26 23:13:02', '2024-09-26 23:13:02', '2024-09-26 23:13:02'),
(901, '64.233.173.227', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-26 23:33:49', '2024-09-26 23:33:49', '2024-09-26 23:33:49'),
(902, '72.14.201.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-26 23:33:49', '2024-09-26 23:33:49', '2024-09-26 23:33:49'),
(903, '72.14.201.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-26 23:35:21', '2024-09-26 23:35:21', '2024-09-26 23:35:21'),
(904, '147.185.132.115', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', '2024-09-26 23:38:55', '2024-09-26 23:38:55', '2024-09-26 23:38:55'),
(905, '52.167.144.166', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-26 23:44:22', '2024-09-26 23:44:22', '2024-09-26 23:44:22'),
(906, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 00:31:30', '2024-09-27 00:31:30', '2024-09-27 00:31:30'),
(907, '52.167.144.184', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 00:48:59', '2024-09-27 00:48:59', '2024-09-27 00:48:59'),
(908, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 00:54:54', '2024-09-27 00:54:54', '2024-09-27 00:54:54'),
(909, '43.134.183.213', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', '2024-09-27 01:04:10', '2024-09-27 01:04:10', '2024-09-27 01:04:10'),
(910, '43.134.183.213', 'Go-http-client/1.1', '2024-09-27 01:04:11', '2024-09-27 01:04:11', '2024-09-27 01:04:11'),
(911, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 01:39:46', '2024-09-27 01:39:46', '2024-09-27 01:39:46'),
(912, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 02:11:56', '2024-09-27 02:11:56', '2024-09-27 02:11:56'),
(913, '64.233.173.226', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-27 02:47:24', '2024-09-27 02:47:24', '2024-09-27 02:47:24'),
(914, '103.190.83.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0', '2024-09-27 02:52:16', '2024-09-27 02:52:16', '2024-09-27 02:52:16'),
(915, '205.210.31.51', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', '2024-09-27 02:58:39', '2024-09-27 02:58:39', '2024-09-27 02:58:39'),
(916, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 03:34:34', '2024-09-27 03:34:34', '2024-09-27 03:34:34'),
(917, '103.80.2.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', '2024-09-27 03:59:56', '2024-09-27 03:59:56', '2024-09-27 03:59:56'),
(918, '64.233.173.228', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-27 04:06:11', '2024-09-27 04:06:11', '2024-09-27 04:06:11'),
(919, '193.186.4.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 04:06:12', '2024-09-27 04:06:12', '2024-09-27 04:06:12'),
(920, '43.131.249.153', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 04:23:57', '2024-09-27 04:23:57', '2024-09-27 04:23:57'),
(921, '52.167.144.210', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 04:32:11', '2024-09-27 04:32:11', '2024-09-27 04:32:11'),
(922, '40.77.167.60', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 05:19:23', '2024-09-27 05:19:23', '2024-09-27 05:19:23'),
(923, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 05:30:11', '2024-09-27 05:30:11', '2024-09-27 05:30:11'),
(924, '40.77.167.56', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 06:13:40', '2024-09-27 06:13:40', '2024-09-27 06:13:40'),
(925, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 06:14:30', '2024-09-27 06:14:30', '2024-09-27 06:14:30'),
(926, '103.196.232.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-27 06:55:18', '2024-09-27 06:55:18', '2024-09-27 06:55:18'),
(927, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 07:39:33', '2024-09-27 07:39:33', '2024-09-27 07:39:33'),
(928, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 07:44:56', '2024-09-27 07:44:56', '2024-09-27 07:44:56'),
(929, '52.167.144.189', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 08:17:09', '2024-09-27 08:17:09', '2024-09-27 08:17:09'),
(930, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 08:41:39', '2024-09-27 08:41:39', '2024-09-27 08:41:39'),
(931, '66.249.74.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 08:57:36', '2024-09-27 08:57:36', '2024-09-27 08:57:36'),
(932, '104.28.240.84', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-27 09:07:59', '2024-09-27 09:07:59', '2024-09-27 09:07:59'),
(933, '43.251.164.64', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-27 09:18:54', '2024-09-27 09:18:54', '2024-09-27 09:18:54'),
(934, '207.46.13.54', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 09:24:15', '2024-09-27 09:24:15', '2024-09-27 09:24:15'),
(935, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 09:50:56', '2024-09-27 09:50:56', '2024-09-27 09:50:56'),
(936, '51.89.142.176', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '2024-09-27 10:36:32', '2024-09-27 10:36:32', '2024-09-27 10:36:32'),
(937, '51.89.142.176', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 10:36:34', '2024-09-27 10:36:34', '2024-09-27 10:36:34'),
(938, '31.6.17.11', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-27 10:49:54', '2024-09-27 10:49:54', '2024-09-27 10:49:54'),
(939, '31.6.17.11', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-27 10:49:55', '2024-09-27 10:49:55', '2024-09-27 10:49:55'),
(940, '205.210.31.153', NULL, '2024-09-27 11:21:13', '2024-09-27 11:21:13', '2024-09-27 11:21:13'),
(941, '111.172.249.49', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 11:56:51', '2024-09-27 11:56:51', '2024-09-27 11:56:51'),
(942, '43.159.128.237', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 13:03:31', '2024-09-27 13:03:31', '2024-09-27 13:03:31'),
(943, '185.191.171.5', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 13:07:58', '2024-09-27 13:07:58', '2024-09-27 13:07:58'),
(944, '85.208.96.193', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 13:18:32', '2024-09-27 13:18:32', '2024-09-27 13:18:32'),
(945, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 13:43:41', '2024-09-27 13:43:41', '2024-09-27 13:43:41'),
(946, '185.191.171.1', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 13:55:50', '2024-09-27 13:55:50', '2024-09-27 13:55:50'),
(947, '85.208.96.204', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 14:05:35', '2024-09-27 14:05:35', '2024-09-27 14:05:35'),
(948, '157.55.39.58', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 14:24:22', '2024-09-27 14:24:22', '2024-09-27 14:24:22'),
(949, '85.208.96.212', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 14:35:05', '2024-09-27 14:35:05', '2024-09-27 14:35:05'),
(950, '185.191.171.19', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 14:35:39', '2024-09-27 14:35:39', '2024-09-27 14:35:39'),
(951, '162.62.213.187', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 14:38:51', '2024-09-27 14:38:51', '2024-09-27 14:38:51'),
(952, '170.106.113.159', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-27 14:40:13', '2024-09-27 14:40:13', '2024-09-27 14:40:13'),
(953, '185.191.171.13', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 14:43:08', '2024-09-27 14:43:08', '2024-09-27 14:43:08'),
(954, '128.90.141.20', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-27 15:12:04', '2024-09-27 15:12:04', '2024-09-27 15:12:04'),
(955, '5.133.192.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2024-09-27 15:26:04', '2024-09-27 15:26:04', '2024-09-27 15:26:04'),
(956, '85.208.96.198', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 15:45:19', '2024-09-27 15:45:19', '2024-09-27 15:45:19'),
(957, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 15:57:37', '2024-09-27 15:57:37', '2024-09-27 15:57:37'),
(958, '85.208.96.207', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 15:58:01', '2024-09-27 15:58:01', '2024-09-27 15:58:01'),
(959, '128.90.141.20', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-27 16:09:48', '2024-09-27 16:09:48', '2024-09-27 16:09:48'),
(960, '157.55.39.50', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 16:28:22', '2024-09-27 16:28:22', '2024-09-27 16:28:22'),
(961, '176.53.218.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:25', '2024-09-27 16:36:25', '2024-09-27 16:36:25'),
(962, '89.104.100.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:26', '2024-09-27 16:36:26', '2024-09-27 16:36:26'),
(963, '176.53.217.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:27', '2024-09-27 16:36:27', '2024-09-27 16:36:27'),
(964, '176.53.223.16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:29', '2024-09-27 16:36:29', '2024-09-27 16:36:29'),
(965, '45.90.60.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:30', '2024-09-27 16:36:30', '2024-09-27 16:36:30'),
(966, '176.53.223.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:32', '2024-09-27 16:36:32', '2024-09-27 16:36:32'),
(967, '176.53.217.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:32', '2024-09-27 16:36:32', '2024-09-27 16:36:32'),
(968, '89.104.101.183', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:34', '2024-09-27 16:36:34', '2024-09-27 16:36:34'),
(969, '89.104.101.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '2024-09-27 16:36:34', '2024-09-27 16:36:34', '2024-09-27 16:36:34'),
(970, '185.191.171.2', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 16:49:12', '2024-09-27 16:49:12', '2024-09-27 16:49:12'),
(971, '85.208.96.194', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 17:15:35', '2024-09-27 17:15:35', '2024-09-27 17:15:35'),
(972, '124.243.137.225', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2024-09-27 17:34:34', '2024-09-27 17:34:34', '2024-09-27 17:34:34'),
(973, '185.191.171.4', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 17:40:47', '2024-09-27 17:40:47', '2024-09-27 17:40:47'),
(974, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 18:00:17', '2024-09-27 18:00:17', '2024-09-27 18:00:17'),
(975, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 18:00:59', '2024-09-27 18:00:59', '2024-09-27 18:00:59'),
(976, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 18:15:21', '2024-09-27 18:15:21', '2024-09-27 18:15:21'),
(977, '66.249.66.207', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 18:15:27', '2024-09-27 18:15:27', '2024-09-27 18:15:27'),
(978, '66.249.66.207', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 18:15:27', '2024-09-27 18:15:27', '2024-09-27 18:15:27'),
(979, '66.249.66.206', 'Googlebot-Image/1.0', '2024-09-27 18:15:29', '2024-09-27 18:15:29', '2024-09-27 18:15:29');
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(980, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 18:32:45', '2024-09-27 18:32:45', '2024-09-27 18:32:45'),
(981, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 18:37:51', '2024-09-27 18:37:51', '2024-09-27 18:37:51'),
(982, '52.167.144.187', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 18:38:33', '2024-09-27 18:38:33', '2024-09-27 18:38:33'),
(983, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-27 18:41:04', '2024-09-27 18:41:04', '2024-09-27 18:41:04'),
(984, '185.191.171.14', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 18:44:03', '2024-09-27 18:44:03', '2024-09-27 18:44:03'),
(985, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 19:00:21', '2024-09-27 19:00:21', '2024-09-27 19:00:21'),
(986, '85.208.96.200', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 19:16:04', '2024-09-27 19:16:04', '2024-09-27 19:16:04'),
(987, '52.167.144.174', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 19:28:48', '2024-09-27 19:28:48', '2024-09-27 19:28:48'),
(988, '66.249.66.206', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 19:45:21', '2024-09-27 19:45:21', '2024-09-27 19:45:21'),
(989, '66.249.66.203', 'Googlebot-Image/1.0', '2024-09-27 19:51:42', '2024-09-27 19:51:42', '2024-09-27 19:51:42'),
(990, '89.161.180.225', 'DuckDuckBot/1.0; (+http://duckduckgo.com/duckduckbot.html)', '2024-09-27 19:58:44', '2024-09-27 19:58:44', '2024-09-27 19:58:44'),
(991, '185.191.171.9', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 20:05:09', '2024-09-27 20:05:09', '2024-09-27 20:05:09'),
(992, '185.191.171.5', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 20:13:31', '2024-09-27 20:13:31', '2024-09-27 20:13:31'),
(993, '66.249.66.208', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 20:13:32', '2024-09-27 20:13:32', '2024-09-27 20:13:32'),
(994, '95.108.213.202', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2024-09-27 20:21:18', '2024-09-27 20:21:18', '2024-09-27 20:21:18'),
(995, '59.153.103.244', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-27 20:28:48', '2024-09-27 20:28:48', '2024-09-27 20:28:48'),
(996, '213.180.203.167', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2024-09-27 20:51:56', '2024-09-27 20:51:56', '2024-09-27 20:51:56'),
(997, '185.191.171.3', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 21:02:25', '2024-09-27 21:02:25', '2024-09-27 21:02:25'),
(998, '185.191.171.19', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 21:11:33', '2024-09-27 21:11:33', '2024-09-27 21:11:33'),
(999, '144.48.118.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 21:39:50', '2024-09-27 21:39:50', '2024-09-27 21:39:50'),
(1000, '40.77.167.64', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 22:01:00', '2024-09-27 22:01:00', '2024-09-27 22:01:00'),
(1001, '185.191.171.18', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 22:11:13', '2024-09-27 22:11:13', '2024-09-27 22:11:13'),
(1002, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 22:14:23', '2024-09-27 22:14:23', '2024-09-27 22:14:23'),
(1003, '146.190.111.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-27 22:15:28', '2024-09-27 22:15:28', '2024-09-27 22:15:28'),
(1004, '40.77.167.79', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 22:20:24', '2024-09-27 22:20:24', '2024-09-27 22:20:24'),
(1005, '78.153.140.218', 'Opera/9.50 (Nintendo DSi; Opera/507; U; en-GB)', '2024-09-27 22:38:59', '2024-09-27 22:38:59', '2024-09-27 22:38:59'),
(1006, '78.153.140.218', 'Mozilla/5.0 (Linux; U; Android 4.2.2; en-gb; GT-I9082 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30', '2024-09-27 22:39:02', '2024-09-27 22:39:02', '2024-09-27 22:39:02'),
(1007, '78.153.140.218', 'Opera/9.80 (Windows NT 5.1; U; MRA 5.5 (build 02842); ru) Presto/2.7.62 Version/11.00', '2024-09-27 22:39:03', '2024-09-27 22:39:03', '2024-09-27 22:39:03'),
(1008, '78.153.140.218', 'Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.51', '2024-09-27 22:39:06', '2024-09-27 22:39:06', '2024-09-27 22:39:06'),
(1009, '78.153.140.218', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', '2024-09-27 22:39:07', '2024-09-27 22:39:07', '2024-09-27 22:39:07'),
(1010, '78.153.140.218', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36', '2024-09-27 22:39:09', '2024-09-27 22:39:09', '2024-09-27 22:39:09'),
(1011, '78.153.140.218', 'Opera/9.80 (Linux mips; ) Presto/2.12.407 Version/12.51 MB97/0.0.39.18 (TOSHIBA, Mxl661L32, wireless) VSTVB_MB97  SmartTvA/3.0.0', '2024-09-27 22:39:11', '2024-09-27 22:39:11', '2024-09-27 22:39:11'),
(1012, '78.153.140.218', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.10 Safari/532.0', '2024-09-27 22:39:13', '2024-09-27 22:39:13', '2024-09-27 22:39:13'),
(1013, '78.153.140.218', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.2.17) Gecko/20110420 Firefox/3.6.17 (.NET CLR 3.5.30729)', '2024-09-27 22:39:15', '2024-09-27 22:39:15', '2024-09-27 22:39:15'),
(1014, '78.153.140.218', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.1.32 (KHTML, like Gecko) Version/11.0 Safari/604.1.32', '2024-09-27 22:39:17', '2024-09-27 22:39:17', '2024-09-27 22:39:17'),
(1015, '78.153.140.218', 'Mozilla/5.0 (Linux; Android 6.0; LG-H631 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/38.0.2125.102 Mobile Safari/537.36', '2024-09-27 22:39:19', '2024-09-27 22:39:19', '2024-09-27 22:39:19'),
(1016, '78.153.140.218', 'Mozilla/5.0 (Linux; Android 5.0; BLU STUDIO C 5+5 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.107 Mobile Safari/537.36 OPR/29.0.1809.91837', '2024-09-27 22:39:21', '2024-09-27 22:39:21', '2024-09-27 22:39:21'),
(1017, '128.90.174.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0', '2024-09-27 22:39:50', '2024-09-27 22:39:50', '2024-09-27 22:39:50'),
(1018, '103.69.148.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-27 22:45:35', '2024-09-27 22:45:35', '2024-09-27 22:45:35'),
(1019, '66.249.66.203', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 23:11:48', '2024-09-27 23:11:48', '2024-09-27 23:11:48'),
(1020, '40.77.167.46', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-27 23:24:48', '2024-09-27 23:24:48', '2024-09-27 23:24:48'),
(1021, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-27 23:41:34', '2024-09-27 23:41:34', '2024-09-27 23:41:34'),
(1022, '185.191.171.8', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-27 23:42:17', '2024-09-27 23:42:17', '2024-09-27 23:42:17'),
(1023, '185.191.171.11', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 00:06:29', '2024-09-28 00:06:29', '2024-09-28 00:06:29'),
(1024, '85.208.96.201', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 00:12:41', '2024-09-28 00:12:41', '2024-09-28 00:12:41'),
(1025, '43.159.148.221', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-28 00:12:53', '2024-09-28 00:12:53', '2024-09-28 00:12:53'),
(1026, '209.38.208.202', NULL, '2024-09-28 00:39:51', '2024-09-28 00:39:51', '2024-09-28 00:39:51'),
(1027, '66.249.66.202', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 00:41:34', '2024-09-28 00:41:34', '2024-09-28 00:41:34'),
(1028, '85.208.96.204', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 00:52:49', '2024-09-28 00:52:49', '2024-09-28 00:52:49'),
(1029, '85.208.96.202', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 00:58:16', '2024-09-28 00:58:16', '2024-09-28 00:58:16'),
(1030, '157.55.39.10', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 01:08:31', '2024-09-28 01:08:31', '2024-09-28 01:08:31'),
(1031, '185.191.171.12', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 01:15:06', '2024-09-28 01:15:06', '2024-09-28 01:15:06'),
(1032, '85.208.96.210', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 02:38:57', '2024-09-28 02:38:57', '2024-09-28 02:38:57'),
(1033, '85.208.96.206', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-28 02:41:02', '2024-09-28 02:41:02', '2024-09-28 02:41:02'),
(1034, '157.55.39.6', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 04:02:20', '2024-09-28 04:02:20', '2024-09-28 04:02:20'),
(1035, '66.249.66.205', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 04:46:41', '2024-09-28 04:46:41', '2024-09-28 04:46:41'),
(1036, '66.249.70.174', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 06:32:25', '2024-09-28 06:32:25', '2024-09-28 06:32:25'),
(1037, '66.249.64.163', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 06:45:16', '2024-09-28 06:45:16', '2024-09-28 06:45:16'),
(1038, '66.249.70.160', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 07:04:41', '2024-09-28 07:04:41', '2024-09-28 07:04:41'),
(1039, '66.249.70.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 07:13:42', '2024-09-28 07:13:42', '2024-09-28 07:13:42'),
(1040, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-28 07:34:42', '2024-09-28 07:34:42', '2024-09-28 07:34:42'),
(1041, '66.249.64.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 07:42:35', '2024-09-28 07:42:35', '2024-09-28 07:42:35'),
(1042, '40.77.167.56', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 07:47:54', '2024-09-28 07:47:54', '2024-09-28 07:47:54'),
(1043, '66.249.64.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 07:53:45', '2024-09-28 07:53:45', '2024-09-28 07:53:45'),
(1044, '68.183.9.16', NULL, '2024-09-28 07:58:29', '2024-09-28 07:58:29', '2024-09-28 07:58:29'),
(1045, '68.183.9.16', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-28 07:58:32', '2024-09-28 07:58:32', '2024-09-28 07:58:32'),
(1046, '68.183.9.16', 'Go-http-client/1.1', '2024-09-28 07:58:33', '2024-09-28 07:58:33', '2024-09-28 07:58:33'),
(1047, '68.183.9.16', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-28 07:58:37', '2024-09-28 07:58:37', '2024-09-28 07:58:37'),
(1048, '43.134.170.46', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-28 08:01:31', '2024-09-28 08:01:31', '2024-09-28 08:01:31'),
(1049, '191.96.207.201', 'python-requests/2.31.0', '2024-09-28 08:03:58', '2024-09-28 08:03:58', '2024-09-28 08:03:58'),
(1050, '66.249.64.173', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 08:49:35', '2024-09-28 08:49:35', '2024-09-28 08:49:35'),
(1051, '66.249.64.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 08:51:30', '2024-09-28 08:51:30', '2024-09-28 08:51:30'),
(1052, '52.167.144.198', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 08:56:30', '2024-09-28 08:56:30', '2024-09-28 08:56:30'),
(1053, '66.249.70.170', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 09:16:34', '2024-09-28 09:16:34', '2024-09-28 09:16:34'),
(1054, '40.77.167.144', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 09:53:45', '2024-09-28 09:53:45', '2024-09-28 09:53:45'),
(1055, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 09:58:47', '2024-09-28 09:58:47', '2024-09-28 09:58:47'),
(1056, '64.233.173.228', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-28 10:00:36', '2024-09-28 10:00:36', '2024-09-28 10:00:36'),
(1057, '72.14.201.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-28 10:00:36', '2024-09-28 10:00:36', '2024-09-28 10:00:36'),
(1058, '103.124.237.232', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-28 10:11:27', '2024-09-28 10:11:27', '2024-09-28 10:11:27'),
(1059, '37.111.206.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-28 10:23:59', '2024-09-28 10:23:59', '2024-09-28 10:23:59'),
(1060, '66.249.64.173', 'Googlebot-Image/1.0', '2024-09-28 10:47:36', '2024-09-28 10:47:36', '2024-09-28 10:47:36'),
(1061, '66.249.64.163', 'Googlebot-Image/1.0', '2024-09-28 11:17:36', '2024-09-28 11:17:36', '2024-09-28 11:17:36'),
(1062, '128.90.141.19', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-28 11:38:34', '2024-09-28 11:38:34', '2024-09-28 11:38:34'),
(1063, '128.90.141.19', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-28 11:38:36', '2024-09-28 11:38:36', '2024-09-28 11:38:36'),
(1064, '66.249.64.162', 'Googlebot-Image/1.0', '2024-09-28 12:02:39', '2024-09-28 12:02:39', '2024-09-28 12:02:39'),
(1065, '5.188.62.21', 'Mozilla/5.0 (10.0; Win64; x6410.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.59 Safari/537.36', '2024-09-28 12:08:25', '2024-09-28 12:08:25', '2024-09-28 12:08:25'),
(1066, '66.249.70.169', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 13:36:43', '2024-09-28 13:36:43', '2024-09-28 13:36:43'),
(1067, '66.249.64.161', 'Googlebot-Image/1.0', '2024-09-28 13:57:38', '2024-09-28 13:57:38', '2024-09-28 13:57:38'),
(1068, '66.249.64.173', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 14:28:29', '2024-09-28 14:28:29', '2024-09-28 14:28:29'),
(1069, '66.249.64.162', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 14:33:52', '2024-09-28 14:33:52', '2024-09-28 14:33:52'),
(1070, '66.249.64.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-28 15:29:11', '2024-09-28 15:29:11', '2024-09-28 15:29:11'),
(1071, '40.77.167.55', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 15:41:35', '2024-09-28 15:41:35', '2024-09-28 15:41:35'),
(1072, '206.168.34.194', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-28 16:00:15', '2024-09-28 16:00:15', '2024-09-28 16:00:15'),
(1073, '69.160.160.56', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Nicecrawler/1.1; +http://www.nicecrawler.com/) Chrome/90.0.4430.97 Safari/537.36', '2024-09-28 16:23:59', '2024-09-28 16:23:59', '2024-09-28 16:23:59'),
(1074, '69.160.160.56', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/81.0.4044.92 Safari/537.36', '2024-09-28 16:24:19', '2024-09-28 16:24:19', '2024-09-28 16:24:19'),
(1075, '49.51.243.156', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-28 17:06:08', '2024-09-28 17:06:08', '2024-09-28 17:06:08'),
(1076, '199.45.154.149', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-28 17:07:05', '2024-09-28 17:07:05', '2024-09-28 17:07:05'),
(1077, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-28 17:36:11', '2024-09-28 17:36:11', '2024-09-28 17:36:11'),
(1078, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-28 17:36:20', '2024-09-28 17:36:20', '2024-09-28 17:36:20'),
(1079, '103.124.237.232', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-28 18:03:52', '2024-09-28 18:03:52', '2024-09-28 18:03:52'),
(1080, '66.249.70.168', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 18:07:33', '2024-09-28 18:07:33', '2024-09-28 18:07:33'),
(1081, '66.249.70.169', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-28 18:14:53', '2024-09-28 18:14:53', '2024-09-28 18:14:53'),
(1082, '66.249.70.170', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 18:21:52', '2024-09-28 18:21:52', '2024-09-28 18:21:52'),
(1083, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-28 18:39:02', '2024-09-28 18:39:02', '2024-09-28 18:39:02'),
(1084, '66.249.70.174', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 18:59:02', '2024-09-28 18:59:02', '2024-09-28 18:59:02'),
(1085, '64.227.139.85', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-28 19:08:22', '2024-09-28 19:08:22', '2024-09-28 19:08:22'),
(1086, '66.249.64.162', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 19:09:59', '2024-09-28 19:09:59', '2024-09-28 19:09:59'),
(1087, '92.255.85.164', 'Mozilla/5.0 (Windows NT 15.0.0; Win64; x64; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.60 Chrome/124.0.6367.60 Not-A.Brand/99  Safari/537.36', '2024-09-28 19:13:22', '2024-09-28 19:13:22', '2024-09-28 19:13:22'),
(1088, '198.235.24.30', NULL, '2024-09-28 19:46:39', '2024-09-28 19:46:39', '2024-09-28 19:46:39'),
(1089, '66.249.64.163', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 19:52:27', '2024-09-28 19:52:27', '2024-09-28 19:52:27'),
(1090, '66.249.64.173', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 20:26:16', '2024-09-28 20:26:16', '2024-09-28 20:26:16'),
(1091, '195.178.110.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.6.27', '2024-09-28 20:42:50', '2024-09-28 20:42:50', '2024-09-28 20:42:50'),
(1092, '52.167.144.204', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 20:58:12', '2024-09-28 20:58:12', '2024-09-28 20:58:12'),
(1093, '101.47.17.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', '2024-09-28 20:59:39', '2024-09-28 20:59:39', '2024-09-28 20:59:39'),
(1094, '27.147.177.102', NULL, '2024-09-28 21:00:16', '2024-09-28 21:00:16', '2024-09-28 21:00:16'),
(1095, '66.249.70.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 21:20:18', '2024-09-28 21:20:18', '2024-09-28 21:20:18'),
(1096, '66.249.64.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 21:42:51', '2024-09-28 21:42:51', '2024-09-28 21:42:51'),
(1097, '40.77.167.70', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-28 21:50:55', '2024-09-28 21:50:55', '2024-09-28 21:50:55'),
(1098, '175.41.161.180', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2024-09-28 22:05:23', '2024-09-28 22:05:23', '2024-09-28 22:05:23'),
(1099, '146.190.111.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-28 22:13:23', '2024-09-28 22:13:23', '2024-09-28 22:13:23'),
(1100, '66.249.70.160', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 22:49:12', '2024-09-28 22:49:12', '2024-09-28 22:49:12'),
(1101, '144.48.118.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-28 22:49:13', '2024-09-28 22:49:13', '2024-09-28 22:49:13'),
(1102, '66.249.70.169', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 22:57:53', '2024-09-28 22:57:53', '2024-09-28 22:57:53'),
(1103, '66.249.64.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-28 23:13:28', '2024-09-28 23:13:28', '2024-09-28 23:13:28'),
(1104, '40.77.167.79', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 00:23:30', '2024-09-29 00:23:30', '2024-09-29 00:23:30'),
(1105, '45.139.104.148', 'Mozilla/5.0 (Linux; U; Android 4.4.2; en-US; HM NOTE 1W Build/KOT49H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/11.0.5.850 U3/0.8.0 Mobile Safari/534.30', '2024-09-29 02:21:06', '2024-09-29 02:21:06', '2024-09-29 02:21:06'),
(1106, '45.139.104.148', 'python-requests/2.31.0', '2024-09-29 02:21:18', '2024-09-29 02:21:18', '2024-09-29 02:21:18'),
(1107, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 02:32:37', '2024-09-29 02:32:37', '2024-09-29 02:32:37'),
(1108, '45.148.10.206', 'Mozilla/5.0 (Windows NT 6.0; rv:36.0) Gecko/20100101 Firefox/36.0 SeaMonkey/2.33.1', '2024-09-29 02:51:04', '2024-09-29 02:51:04', '2024-09-29 02:51:04'),
(1109, '43.153.123.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-29 03:20:55', '2024-09-29 03:20:55', '2024-09-29 03:20:55'),
(1110, '223.29.214.165', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-29 03:25:26', '2024-09-29 03:25:26', '2024-09-29 03:25:26'),
(1111, '27.147.177.102', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', '2024-09-29 03:44:29', '2024-09-29 03:44:29', '2024-09-29 03:44:29'),
(1112, '66.249.64.161', 'Googlebot-Image/1.0', '2024-09-29 04:04:12', '2024-09-29 04:04:12', '2024-09-29 04:04:12'),
(1113, '52.167.144.234', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 04:35:21', '2024-09-29 04:35:21', '2024-09-29 04:35:21'),
(1114, '40.77.167.152', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 05:23:24', '2024-09-29 05:23:24', '2024-09-29 05:23:24'),
(1115, '66.249.70.169', 'Googlebot-Image/1.0', '2024-09-29 06:04:26', '2024-09-29 06:04:26', '2024-09-29 06:04:26'),
(1116, '52.167.144.225', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 06:12:40', '2024-09-29 06:12:40', '2024-09-29 06:12:40'),
(1117, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 06:24:21', '2024-09-29 06:24:21', '2024-09-29 06:24:21'),
(1118, '64.233.173.227', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-29 06:55:57', '2024-09-29 06:55:57', '2024-09-29 06:55:57'),
(1119, '193.186.4.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 06:55:58', '2024-09-29 06:55:58', '2024-09-29 06:55:58'),
(1120, '66.249.70.168', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-29 06:58:01', '2024-09-29 06:58:01', '2024-09-29 06:58:01'),
(1121, '37.111.206.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 07:01:56', '2024-09-29 07:01:56', '2024-09-29 07:01:56'),
(1122, '37.111.206.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 08:21:32', '2024-09-29 08:21:32', '2024-09-29 08:21:32'),
(1123, '128.90.135.8', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-29 09:44:51', '2024-09-29 09:44:51', '2024-09-29 09:44:51'),
(1124, '128.90.135.8', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-29 10:22:06', '2024-09-29 10:22:06', '2024-09-29 10:22:06'),
(1125, '195.178.110.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.5.23', '2024-09-29 10:37:46', '2024-09-29 10:37:46', '2024-09-29 10:37:46'),
(1126, '182.42.105.85', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-29 10:52:05', '2024-09-29 10:52:05', '2024-09-29 10:52:05'),
(1127, '79.124.58.138', 'python-requests/2.31.0', '2024-09-29 10:56:49', '2024-09-29 10:56:49', '2024-09-29 10:56:49'),
(1128, '43.135.142.7', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-29 11:00:57', '2024-09-29 11:00:57', '2024-09-29 11:00:57'),
(1129, '52.167.144.231', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 12:13:54', '2024-09-29 12:13:54', '2024-09-29 12:13:54'),
(1130, '192.99.148.106', 'Mozilla/4.0+(compatible;+MSIE+8.0;+Windows+NT+5.2)', '2024-09-29 12:59:10', '2024-09-29 12:59:10', '2024-09-29 12:59:10'),
(1131, '59.153.103.244', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', '2024-09-29 14:02:17', '2024-09-29 14:02:17', '2024-09-29 14:02:17'),
(1132, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 14:23:59', '2024-09-29 14:23:59', '2024-09-29 14:23:59'),
(1133, '43.251.164.64', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-29 15:06:52', '2024-09-29 15:06:52', '2024-09-29 15:06:52'),
(1134, '66.249.70.174', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-29 15:57:48', '2024-09-29 15:57:48', '2024-09-29 15:57:48'),
(1135, '66.249.64.171', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-29 15:58:25', '2024-09-29 15:58:25', '2024-09-29 15:58:25'),
(1136, '66.249.64.161', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 16:37:37', '2024-09-29 16:37:37', '2024-09-29 16:37:37'),
(1137, '66.249.64.162', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 16:40:59', '2024-09-29 16:40:59', '2024-09-29 16:40:59'),
(1138, '66.249.64.161', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-29 17:58:15', '2024-09-29 17:58:15', '2024-09-29 17:58:15'),
(1139, '66.249.70.170', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 18:16:26', '2024-09-29 18:16:26', '2024-09-29 18:16:26'),
(1140, '66.249.70.169', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 18:25:21', '2024-09-29 18:25:21', '2024-09-29 18:25:21'),
(1141, '64.233.173.226', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-29 18:33:02', '2024-09-29 18:33:02', '2024-09-29 18:33:02'),
(1142, '72.14.201.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 18:33:03', '2024-09-29 18:33:03', '2024-09-29 18:33:03'),
(1143, '103.80.2.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 18:33:06', '2024-09-29 18:33:06', '2024-09-29 18:33:06'),
(1144, '66.249.64.173', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 18:33:19', '2024-09-29 18:33:19', '2024-09-29 18:33:19'),
(1145, '66.249.64.173', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-29 18:57:17', '2024-09-29 18:57:17', '2024-09-29 18:57:17'),
(1146, '66.249.64.162', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-29 18:58:25', '2024-09-29 18:58:25', '2024-09-29 18:58:25'),
(1147, '66.249.64.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 19:01:43', '2024-09-29 19:01:43', '2024-09-29 19:01:43'),
(1148, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 19:02:15', '2024-09-29 19:02:15', '2024-09-29 19:02:15'),
(1149, '66.249.64.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-29 19:03:17', '2024-09-29 19:03:17', '2024-09-29 19:03:17'),
(1150, '66.249.64.172', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-29 19:39:39', '2024-09-29 19:39:39', '2024-09-29 19:39:39'),
(1151, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-29 19:41:07', '2024-09-29 19:41:07', '2024-09-29 19:41:07'),
(1152, '66.249.64.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 19:50:51', '2024-09-29 19:50:51', '2024-09-29 19:50:51'),
(1153, '66.249.70.168', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/128.0.6613.137 Safari/537.36', '2024-09-29 19:58:03', '2024-09-29 19:58:03', '2024-09-29 19:58:03'),
(1154, '207.46.13.125', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 20:13:09', '2024-09-29 20:13:09', '2024-09-29 20:13:09'),
(1155, '154.28.222.199', 'Mozilla/5.0 (iPad; CPU OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1', '2024-09-29 20:27:51', '2024-09-29 20:27:51', '2024-09-29 20:27:51'),
(1156, '66.249.70.174', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 20:32:32', '2024-09-29 20:32:32', '2024-09-29 20:32:32'),
(1157, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 21:06:09', '2024-09-29 21:06:09', '2024-09-29 21:06:09'),
(1158, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', '2024-09-29 21:06:44', '2024-09-29 21:06:44', '2024-09-29 21:06:44'),
(1159, '43.130.32.224', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-29 21:16:25', '2024-09-29 21:16:25', '2024-09-29 21:16:25'),
(1160, '59.153.103.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 21:21:41', '2024-09-29 21:21:41', '2024-09-29 21:21:41'),
(1161, '66.249.70.160', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 21:28:25', '2024-09-29 21:28:25', '2024-09-29 21:28:25'),
(1162, '207.46.13.36', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 21:30:52', '2024-09-29 21:30:52', '2024-09-29 21:30:52'),
(1163, '40.77.167.76', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-29 21:58:07', '2024-09-29 21:58:07', '2024-09-29 21:58:07'),
(1164, '66.249.70.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 22:12:00', '2024-09-29 22:12:00', '2024-09-29 22:12:00'),
(1165, '103.198.132.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-29 22:47:17', '2024-09-29 22:47:17', '2024-09-29 22:47:17'),
(1166, '66.249.64.162', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-29 22:50:46', '2024-09-29 22:50:46', '2024-09-29 22:50:46'),
(1167, '64.227.7.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2024-09-29 23:22:53', '2024-09-29 23:22:53', '2024-09-29 23:22:53'),
(1168, '66.249.64.163', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 00:20:25', '2024-09-30 00:20:25', '2024-09-30 00:20:25'),
(1169, '66.249.64.162', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-30 01:57:20', '2024-09-30 01:57:20', '2024-09-30 01:57:20'),
(1170, '20.240.18.35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', '2024-09-30 02:28:44', '2024-09-30 02:28:44', '2024-09-30 02:28:44'),
(1171, '139.59.132.8', NULL, '2024-09-30 02:38:05', '2024-09-30 02:38:05', '2024-09-30 02:38:05'),
(1172, '139.59.132.8', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-30 02:38:06', '2024-09-30 02:38:06', '2024-09-30 02:38:06'),
(1173, '139.59.132.8', 'Go-http-client/1.1', '2024-09-30 02:38:06', '2024-09-30 02:38:06', '2024-09-30 02:38:06'),
(1174, '139.59.132.8', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-30 02:38:09', '2024-09-30 02:38:09', '2024-09-30 02:38:09'),
(1175, '37.111.206.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-30 02:50:57', '2024-09-30 02:50:57', '2024-09-30 02:50:57'),
(1176, '66.249.70.171', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 03:51:18', '2024-09-30 03:51:18', '2024-09-30 03:51:18'),
(1177, '66.249.70.170', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; GoogleOther)', '2024-09-30 03:57:29', '2024-09-30 03:57:29', '2024-09-30 03:57:29'),
(1178, '20.171.206.85', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:19:14', '2024-09-30 04:19:14', '2024-09-30 04:19:14'),
(1179, '20.171.206.187', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:19:45', '2024-09-30 04:19:45', '2024-09-30 04:19:45'),
(1180, '20.171.206.217', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:20:46', '2024-09-30 04:20:46', '2024-09-30 04:20:46'),
(1181, '20.171.206.96', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:22:45', '2024-09-30 04:22:45', '2024-09-30 04:22:45'),
(1182, '20.171.206.107', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:23:50', '2024-09-30 04:23:50', '2024-09-30 04:23:50'),
(1183, '20.171.206.35', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:24:46', '2024-09-30 04:24:46', '2024-09-30 04:24:46'),
(1184, '20.171.206.105', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', '2024-09-30 04:25:48', '2024-09-30 04:25:48', '2024-09-30 04:25:48'),
(1185, '64.226.78.121', NULL, '2024-09-30 05:02:19', '2024-09-30 05:02:19', '2024-09-30 05:02:19'),
(1186, '64.226.78.121', 'Mozilla/5.0 (Linux; Android 6.0; HTC One M9 Build/MRA908308) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.1112.98 Mobile Safari/537.3', '2024-09-30 05:02:23', '2024-09-30 05:02:23', '2024-09-30 05:02:23'),
(1187, '64.226.78.121', 'Go-http-client/1.1', '2024-09-30 05:02:23', '2024-09-30 05:02:23', '2024-09-30 05:02:23'),
(1188, '64.226.78.121', 'Mozilla/5.0 (l9scan/2.0.037313e2834313e25383e26363; +https://leakix.net)', '2024-09-30 05:02:28', '2024-09-30 05:02:28', '2024-09-30 05:02:28'),
(1189, '66.249.74.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 05:49:31', '2024-09-30 05:49:31', '2024-09-30 05:49:31'),
(1190, '173.252.79.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-30 06:26:20', '2024-09-30 06:26:20', '2024-09-30 06:26:20'),
(1191, '173.252.127.20', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2024-09-30 06:26:21', '2024-09-30 06:26:21', '2024-09-30 06:26:21'),
(1192, '173.252.69.114', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2024-09-30 06:26:55', '2024-09-30 06:26:55', '2024-09-30 06:26:55'),
(1193, '34.168.206.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-30 06:33:07', '2024-09-30 06:33:07', '2024-09-30 06:33:07'),
(1194, '85.208.96.199', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 06:35:16', '2024-09-30 06:35:16', '2024-09-30 06:35:16'),
(1195, '85.208.96.193', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 06:49:53', '2024-09-30 06:49:53', '2024-09-30 06:49:53'),
(1196, '64.233.173.228', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-30 06:53:25', '2024-09-30 06:53:25', '2024-09-30 06:53:25'),
(1197, '185.191.171.5', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 07:04:15', '2024-09-30 07:04:15', '2024-09-30 07:04:15'),
(1198, '103.184.173.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-30 08:10:38', '2024-09-30 08:10:38', '2024-09-30 08:10:38'),
(1199, '64.233.173.227', 'Chrome Privacy Preserving Prefetch Proxy', '2024-09-30 08:12:04', '2024-09-30 08:12:04', '2024-09-30 08:12:04'),
(1200, '72.14.201.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-09-30 08:12:04', '2024-09-30 08:12:04', '2024-09-30 08:12:04'),
(1201, '66.249.65.71', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 08:50:34', '2024-09-30 08:50:34', '2024-09-30 08:50:34'),
(1202, '85.208.96.207', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 09:01:13', '2024-09-30 09:01:13', '2024-09-30 09:01:13'),
(1203, '185.191.171.18', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 09:07:44', '2024-09-30 09:07:44', '2024-09-30 09:07:44'),
(1204, '85.208.96.212', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 09:29:06', '2024-09-30 09:29:06', '2024-09-30 09:29:06'),
(1205, '185.191.171.12', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 09:33:10', '2024-09-30 09:33:10', '2024-09-30 09:33:10'),
(1206, '85.208.96.205', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 09:34:22', '2024-09-30 09:34:22', '2024-09-30 09:34:22'),
(1207, '66.249.65.72', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 09:53:45', '2024-09-30 09:53:45', '2024-09-30 09:53:45'),
(1208, '52.167.144.208', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-30 09:59:44', '2024-09-30 09:59:44', '2024-09-30 09:59:44');
INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `visited_at`, `created_at`, `updated_at`) VALUES
(1209, '185.191.171.8', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 10:04:19', '2024-09-30 10:04:19', '2024-09-30 10:04:19'),
(1210, '92.118.39.244', 'Mozilla/5.0 (Linux; Android 9; SM-G960W) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36', '2024-09-30 10:16:34', '2024-09-30 10:16:34', '2024-09-30 10:16:34'),
(1211, '92.118.39.244', 'Mozilla/5.0 (Linux; Android 7.0; SM-J710FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36', '2024-09-30 10:17:45', '2024-09-30 10:17:45', '2024-09-30 10:17:45'),
(1212, '66.249.74.34', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 10:17:56', '2024-09-30 10:17:56', '2024-09-30 10:17:56'),
(1213, '35.183.145.61', 'Mozilla/5.0 (X11; CrOS x86_64 12371.22.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.35 Safari/537.36', '2024-09-30 10:19:06', '2024-09-30 10:19:06', '2024-09-30 10:19:06'),
(1214, '40.77.167.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-30 10:19:51', '2024-09-30 10:19:51', '2024-09-30 10:19:51'),
(1215, '185.191.171.3', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 10:47:36', '2024-09-30 10:47:36', '2024-09-30 10:47:36'),
(1216, '184.170.241.141', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-30 10:55:04', '2024-09-30 10:55:04', '2024-09-30 10:55:04'),
(1217, '184.170.241.141', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-30 10:55:05', '2024-09-30 10:55:05', '2024-09-30 10:55:05'),
(1218, '85.208.96.203', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 11:11:47', '2024-09-30 11:11:47', '2024-09-30 11:11:47'),
(1219, '85.208.96.206', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 11:19:14', '2024-09-30 11:19:14', '2024-09-30 11:19:14'),
(1220, '185.191.171.10', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 11:41:04', '2024-09-30 11:41:04', '2024-09-30 11:41:04'),
(1221, '117.62.235.53', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-30 11:43:16', '2024-09-30 11:43:16', '2024-09-30 11:43:16'),
(1222, '66.249.74.40', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.6613.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 11:52:25', '2024-09-30 11:52:25', '2024-09-30 11:52:25'),
(1223, '185.191.171.4', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 12:10:41', '2024-09-30 12:10:41', '2024-09-30 12:10:41'),
(1224, '85.208.96.201', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 13:06:26', '2024-09-30 13:06:26', '2024-09-30 13:06:26'),
(1225, '66.249.74.36', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 13:09:02', '2024-09-30 13:09:02', '2024-09-30 13:09:02'),
(1226, '66.249.65.72', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 13:12:03', '2024-09-30 13:12:03', '2024-09-30 13:12:03'),
(1227, '66.249.65.71', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 13:15:34', '2024-09-30 13:15:34', '2024-09-30 13:15:34'),
(1228, '87.250.224.51', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2024-09-30 13:18:53', '2024-09-30 13:18:53', '2024-09-30 13:18:53'),
(1229, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 13:22:29', '2024-09-30 13:22:29', '2024-09-30 13:22:29'),
(1230, '85.208.96.198', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 13:46:47', '2024-09-30 13:46:47', '2024-09-30 13:46:47'),
(1231, '85.208.96.204', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 14:31:24', '2024-09-30 14:31:24', '2024-09-30 14:31:24'),
(1232, '92.255.85.164', 'Mozilla/5.0 (Windows NT 10.0.0; Win64; x64; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.119 Chrome/124.0.6367.119 Not-A.Brand/99  Safari/537.36', '2024-09-30 14:37:46', '2024-09-30 14:37:46', '2024-09-30 14:37:46'),
(1233, '128.90.141.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-30 14:58:57', '2024-09-30 14:58:57', '2024-09-30 14:58:57'),
(1234, '85.208.96.210', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 14:58:57', '2024-09-30 14:58:57', '2024-09-30 14:58:57'),
(1235, '43.135.133.194', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2024-09-30 14:59:05', '2024-09-30 14:59:05', '2024-09-30 14:59:05'),
(1236, '185.191.171.14', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 15:25:11', '2024-09-30 15:25:11', '2024-09-30 15:25:11'),
(1237, '66.249.65.70', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 15:27:22', '2024-09-30 15:27:22', '2024-09-30 15:27:22'),
(1238, '85.208.96.200', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 15:52:07', '2024-09-30 15:52:07', '2024-09-30 15:52:07'),
(1239, '66.249.74.34', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 15:56:27', '2024-09-30 15:56:27', '2024-09-30 15:56:27'),
(1240, '128.90.135.8', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', '2024-09-30 15:57:56', '2024-09-30 15:57:56', '2024-09-30 15:57:56'),
(1241, '128.90.135.8', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/111.0.5563.19 Safari/537.36', '2024-09-30 15:57:58', '2024-09-30 15:57:58', '2024-09-30 15:57:58'),
(1242, '66.249.65.73', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 16:01:18', '2024-09-30 16:01:18', '2024-09-30 16:01:18'),
(1243, '185.191.171.1', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 16:04:38', '2024-09-30 16:04:38', '2024-09-30 16:04:38'),
(1244, '185.191.171.19', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 16:39:55', '2024-09-30 16:39:55', '2024-09-30 16:39:55'),
(1245, '188.143.169.41', 'Mozilla/5.0 X11; Ubuntu; Linux x86_64; rv:126.0 Gecko/20100101 Firefox/126.0', '2024-09-30 16:51:19', '2024-09-30 16:51:19', '2024-09-30 16:51:19'),
(1246, '66.249.74.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 17:07:40', '2024-09-30 17:07:40', '2024-09-30 17:07:40'),
(1247, '66.249.74.40', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 17:16:59', '2024-09-30 17:16:59', '2024-09-30 17:16:59'),
(1248, '52.167.144.225', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-30 17:21:54', '2024-09-30 17:21:54', '2024-09-30 17:21:54'),
(1249, '85.208.96.196', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 17:46:13', '2024-09-30 17:46:13', '2024-09-30 17:46:13'),
(1250, '85.208.96.197', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 18:29:21', '2024-09-30 18:29:21', '2024-09-30 18:29:21'),
(1251, '185.191.171.2', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 18:35:44', '2024-09-30 18:35:44', '2024-09-30 18:35:44'),
(1252, '66.249.74.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 18:47:28', '2024-09-30 18:47:28', '2024-09-30 18:47:28'),
(1253, '66.249.65.71', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 18:48:09', '2024-09-30 18:48:09', '2024-09-30 18:48:09'),
(1254, '66.249.74.34', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 19:14:15', '2024-09-30 19:14:15', '2024-09-30 19:14:15'),
(1255, '146.190.111.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', '2024-09-30 19:18:12', '2024-09-30 19:18:12', '2024-09-30 19:18:12'),
(1256, '185.191.171.1', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 19:29:31', '2024-09-30 19:29:31', '2024-09-30 19:29:31'),
(1257, '66.249.74.41', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 19:44:15', '2024-09-30 19:44:15', '2024-09-30 19:44:15'),
(1258, '66.249.74.36', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 19:50:41', '2024-09-30 19:50:41', '2024-09-30 19:50:41'),
(1259, '206.168.34.127', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2024-09-30 20:03:18', '2024-09-30 20:03:18', '2024-09-30 20:03:18'),
(1260, '85.208.96.196', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 20:14:44', '2024-09-30 20:14:44', '2024-09-30 20:14:44'),
(1261, '66.249.65.71', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/129.0.6668.70 Safari/537.36', '2024-09-30 21:29:21', '2024-09-30 21:29:21', '2024-09-30 21:29:21'),
(1262, '66.249.65.70', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GoogleOther) Chrome/129.0.6668.70 Safari/537.36', '2024-09-30 21:30:12', '2024-09-30 21:30:12', '2024-09-30 21:30:12'),
(1263, '66.249.65.72', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 21:37:02', '2024-09-30 21:37:02', '2024-09-30 21:37:02'),
(1264, '85.208.96.198', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 21:39:05', '2024-09-30 21:39:05', '2024-09-30 21:39:05'),
(1265, '85.208.96.202', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 21:40:21', '2024-09-30 21:40:21', '2024-09-30 21:40:21'),
(1266, '66.249.65.70', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 21:55:29', '2024-09-30 21:55:29', '2024-09-30 21:55:29'),
(1267, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', '2024-09-30 22:04:34', '2024-09-30 22:04:34', '2024-09-30 22:04:34'),
(1268, '62.122.184.194', 'Mozilla/5.0 (Windows NT 10.0.0; Win64; x64; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.61 Chrome/124.0.6367.61 Not-A.Brand/99  Safari/537.36', '2024-09-30 22:14:27', '2024-09-30 22:14:27', '2024-09-30 22:14:27'),
(1269, '66.249.65.72', 'Googlebot/2.1 (+http://www.google.com/bot.html)', '2024-09-30 22:41:28', '2024-09-30 22:41:28', '2024-09-30 22:41:28'),
(1270, '66.249.65.73', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.70 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2024-09-30 22:54:44', '2024-09-30 22:54:44', '2024-09-30 22:54:44'),
(1271, '52.167.144.222', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', '2024-09-30 23:20:13', '2024-09-30 23:20:13', '2024-09-30 23:20:13'),
(1272, '27.147.177.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '2024-10-01 00:34:42', '2024-10-01 00:34:42', '2024-10-01 00:34:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_ceos`
--
ALTER TABLE `about_ceos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_files`
--
ALTER TABLE `course_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tutorials`
--
ALTER TABLE `course_tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers_corners`
--
ALTER TABLE `employers_corners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applicants`
--
ALTER TABLE `job_applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_applicants_email_unique` (`email`);

--
-- Indexes for table `job_opportunities`
--
ALTER TABLE `job_opportunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_and_services`
--
ALTER TABLE `product_and_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_ceos`
--
ALTER TABLE `about_ceos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_files`
--
ALTER TABLE `course_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_tutorials`
--
ALTER TABLE `course_tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers_corners`
--
ALTER TABLE `employers_corners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applicants`
--
ALTER TABLE `job_applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_opportunities`
--
ALTER TABLE `job_opportunities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_and_services`
--
ALTER TABLE `product_and_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1273;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
