-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 06:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `achievement_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `sports_id` int(25) NOT NULL,
  `achievement_details` text NOT NULL,
  `achievement_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievement_id`, `student_id`, `sports_id`, `achievement_details`, `achievement_date`) VALUES
(1, 1, 2, 'top player', '2022-06-10'),
(2, 1, 1, 'Mr. Snadeep Navalekar of B.com V sem secured 2nd place in 1500mtr run secured 2nd\r\nplace and 2nd place in 21 km Half Marathon at Inter Collegiate Athletic Meet', '2019-06-12'),
(3, 3, 1, 'good leader', '2022-06-16'),
(4, 4, 2, 'fmf', '2022-06-17'),
(5, 2, 3, 'Ms. Meghana of B.A I sem secured I st place in 5000 km run & 21 km half marathon at\r\nInter Collegiate Athletic Meet.', '2018-07-09'),
(6, 3, 1, 'jfjcj', '2022-07-08'),
(7, 4, 2, 'good', '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `branch_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_description`) VALUES
(1, 'BCA', 'BCA is Bachelors in Computer Application. BCA is a 3-year undergraduate degree programme that focusses on knowledge on the basics of computer application and software development.'),
(2, 'BSC', 'Bachelor of Science is an undergraduate degree of three years duration which is universally offered across institutes and universities across India.'),
(3, 'BCOM', 'BCom or Bachelor of Commerce course is a three-year UG degree course recognised by the Universities Grants Commission (UGC).'),
(8, 'BA', 'Bachelor of Arts also known as BA is a three years undergraduate programme. Aspirants who have passed 10+2 in any stream can take admission in this course.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(20) NOT NULL,
  `sports_id` varchar(20) NOT NULL,
  `event_name` varchar(40) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` varchar(10) NOT NULL,
  `event_photo` varchar(200) NOT NULL,
  `event_status` varchar(30) NOT NULL,
  `event_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `sports_id`, `event_name`, `event_description`, `event_date`, `event_photo`, `event_status`, `event_type`) VALUES
(1, '1', 'Inter Collegiate Athletic', '21 km Half Marathon at Inter Collegiate Athletic Meet', '2019-07-10', 'track_and_field.jpg', 'Active', 'outdoor '),
(2, '4', 'International Premier Tennis', 'he International Premier Tennis League had a shorter format, cheerleaders and franchises. An added extra was that the matches were played across countries; the venues included stadiums in India,', '2014-07-16', 'download.jpg', 'Active', 'outdoor '),
(3, '2', 'ddb', 'dvxb ', '2022-07-07', 'spots1.PNG', 'aaa', 'outdoor '),
(4, '2', 'atheltics', 'jdnjdvn', '2022-07-21', 'spots1.PNG', 'aaa', 'outdoor '),
(17, '4', 'Inter Collegiate Athletic Meet', 'hello', '2022-08-11', 'sports4.PNG', 'Active', 'outdoor ');

-- --------------------------------------------------------

--
-- Table structure for table `event_request`
--

CREATE TABLE `event_request` (
  `event_request_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `request_date` varchar(10) NOT NULL,
  `event_request_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_request`
--

INSERT INTO `event_request` (`event_request_id`, `event_id`, `student_id`, `request_date`, `event_request_status`) VALUES
(1, 1, 1, '', 'NOT SELECTED'),
(2, 2, 1, '2022-07-22', 'SELECTED'),
(3, 2, 2, '2022-07-19', 'SELECTED'),
(4, 2, 1, '2022-07-27', 'SELECTED'),
(5, 1, 1, '2022-08-02', 'SELECTED');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(20) NOT NULL,
  `facility_name` varchar(30) NOT NULL,
  `facility_description` text NOT NULL,
  `facility_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `facility_name`, `facility_description`, `facility_photo`) VALUES
(2, 'Library', 'As an Institution in the forefront of knowledge enrichment and dissemination of knowledge, catering to the academic needs of over 300 students, the library has put in place enormous knowledge resource.The library is placed in the 1st floor with a stock of nearly 19290 books, periodicals, national and international journals etc.', 'DSCN1307-150x150.jpg'),
(3, 'Multi Gym', 'As the quote says “Sound Mind in a Sound Body”  College provides the Multi Gym Facility for the students in the campus to aware about the Physical Fitness among all the students.Gym is well equipped with various exercise equipments. Gym will be available for all the students at 7.00 AM to 8.00 A.M in the morning  and  at 4.00 PM to 5 .00 PM in the evening', 'GYMKHANA-300x225.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_answer` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `security_question`, `security_answer`, `status`) VALUES
(1, 'admin', '123123', 'admin', 'who r u', 'admin', 'active'),
(3, 'UB123123', 'UB123123', 'student', 'Enter Your email Id', 'riosusan236@gmail.com', 'Active'),
(4, 'sagar@gmail.com', '9886631616', 'pd', 'Enter email id', 'sagar@gmail.com', 'Active'),
(5, 'UB123124', 'UB123124', 'student', 'Enter Your email Id', 'riokg1234@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(20) NOT NULL,
  `material_name` varchar(30) NOT NULL,
  `material_description` text NOT NULL,
  `material_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `material_description`, `material_photo`) VALUES
(1, 'cricket bat', 'CEAT Cricket Bat', 'cricket-helmet-500x500.jpg'),
(2, 'Cricket Ball', '\r\nNet World Sports\r\nFORTRESS County Match Crown Cricket Ball', 'RedMatchThreeQuarterCrownBall_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `material_issue`
--

CREATE TABLE `material_issue` (
  `material_issue_id` int(20) NOT NULL,
  `material_id` int(20) NOT NULL,
  `student_id` int(25) NOT NULL,
  `pd_id` int(30) NOT NULL,
  `issued_date` varchar(10) NOT NULL,
  `issued_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_issue`
--

INSERT INTO `material_issue` (`material_issue_id`, `material_id`, `student_id`, `pd_id`, `issued_date`, `issued_status`) VALUES
(1, 1, 1, 3, '2022-07-27', 'RETURNED'),
(2, 1, 1, 3, '2022-07-27', 'RETURNED'),
(3, 1, 1, 3, '2022-08-04', 'RETURNED'),
(4, 1, 1, 3, '2022-08-07', 'ISSUED');

-- --------------------------------------------------------

--
-- Table structure for table `pd_details`
--

CREATE TABLE `pd_details` (
  `pd_id` int(20) NOT NULL,
  `pd_fullname` varchar(30) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `date_of_joining` varchar(20) NOT NULL,
  `pd_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pd_details`
--

INSERT INTO `pd_details` (`pd_id`, `pd_fullname`, `date_of_birth`, `qualification`, `email_id`, `contact_no`, `date_of_joining`, `pd_photo`) VALUES
(1, 'raj', '2022-07-08', 'mca', 'hgh@gmail.com', 9234556600, '2022-07-22', 'photo-by-face-generator_62e8f9ce62d670000edaca6c.jpg'),
(3, 'Sagar', '2000-07-11', 'MCA', 'sagar@gmail.com', 9886631616, '2022-07-27', 'generated_photos_5e6887c56d3b380006f1db09.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_material`
--

CREATE TABLE `purchase_material` (
  `purchase_material_id` int(20) NOT NULL,
  `vendor_id` int(20) NOT NULL,
  `material_id` int(25) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `purchase_price` varchar(50) NOT NULL,
  `purchase_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_material`
--

INSERT INTO `purchase_material` (`purchase_material_id`, `vendor_id`, `material_id`, `quantity`, `purchase_price`, `purchase_date`) VALUES
(1, 1, 1, '6', '100', '2022-07-27'),
(2, 1, 1, '6', '100', '2022-07-27'),
(3, 1, 2, '20', '50', '2022-07-27'),
(4, 1, 2, '20', '50', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sports_id` int(20) NOT NULL,
  `sports_name` varchar(30) NOT NULL,
  `sports_description` text NOT NULL,
  `sports_photo` varchar(200) NOT NULL,
  `sports_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_id`, `sports_name`, `sports_description`, `sports_photo`, `sports_type`) VALUES
(1, 'Half Marathon', 'Half Marathon at Inter Collegiate Athletic Meet', 'half.PNG', 'Outdoor'),
(3, ' half marathon', 'Inter Collegiate Athletic Meet', 'Capture.PNG', 'Outdoor'),
(4, 'Tennis', 'International Premier Tennis League', 'download.jpg', 'Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(20) NOT NULL,
  `material_id` int(20) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `material_id`, `stock`) VALUES
(1, 1, '10'),
(2, 2, '40');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(20) NOT NULL,
  `student_full_name` varchar(30) NOT NULL,
  `usn_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `admission_year` varchar(20) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `student_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_full_name`, `usn_no`, `address`, `email_id`, `contact_no`, `gender`, `date_of_birth`, `admission_year`, `branch_id`, `student_photo`) VALUES
(1, 'Sandeep', 'UB123123', 'Gadag', 'riosusan236@gmail.com', 9886632727, 'Male', '2000-07-06', '2022-07-27', '3', 'generated_photos_5e6889236d3b380006f22a1f.jpg'),
(2, 'Meghana', 'UB123124', 'Gadag', 'riokg1234@gmail.com', 9812345678, 'Female', '2000-08-16', '2018-08-09', '3', 'generated_photos_5e6886106d3b380006f1764b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(20) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `vendor_contact_no` bigint(11) NOT NULL,
  `vendor_email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_contact_no`, `vendor_email_id`) VALUES
(1, 'Kiran', 'Gadag', 9834524132, 'kiran@gmail.com'),
(2, 'Ramesh', 'Gadag', 9673461234, 'ramesha123@gmail.com'),
(3, 'Suresh', 'Banglore', 9820312437, 'suresha74t@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_request`
--
ALTER TABLE `event_request`
  ADD PRIMARY KEY (`event_request_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `material_issue`
--
ALTER TABLE `material_issue`
  ADD PRIMARY KEY (`material_issue_id`);

--
-- Indexes for table `pd_details`
--
ALTER TABLE `pd_details`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `purchase_material`
--
ALTER TABLE `purchase_material`
  ADD PRIMARY KEY (`purchase_material_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `achievement_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event_request`
--
ALTER TABLE `event_request`
  MODIFY `event_request_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `material_issue`
--
ALTER TABLE `material_issue`
  MODIFY `material_issue_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pd_details`
--
ALTER TABLE `pd_details`
  MODIFY `pd_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_material`
--
ALTER TABLE `purchase_material`
  MODIFY `purchase_material_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
