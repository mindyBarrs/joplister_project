-- 
-- MySQL Information for creating the database and tables
-- 


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Create Table
--

CREATE DATABASE JobLister;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Business'),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `job_description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(3, 1, 'Winterfell Company', 'Sr. Full-Stock Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non nibh ac massa scelerisque rhoncus. Nullam pellentesque metus id eros faucibus cursus. Praesent laoreet enim et arcu auctor tristique. Aliquam congue ut leo at vestibulum. Etiam venenatis do', '120k', 'The North', 'Jon Snow', 'jon.snow@winterfell.com', '2018-06-11 01:37:28'),
(5, 3, 'Kingslanding Company', 'Hand of the King', 'Cras vitae ipsum molestie odio tincidunt bibendum in a lorem. Donec ut sollicitudin lorem, ac volutpat diam. Fusce nec leo et ipsum euismod mattis et id neque. Aliquam imperdiet tellus egestas viverra accumsan. Mauris a orci ipsum. Donec tincidunt consect', '55k', 'The South', 'Cersi', 'the_queen@redkeep.com', '2018-06-11 01:41:54'),
(6, 4, 'Kingslanding Company', 'Builder', 'Someone to help rebuild the septum                    ', '10k', 'Kingslanding', 'Cersi', 'the_queen@redkeep.com', '2018-06-11 02:30:36'),
(7, 1, 'Eyrie Company', 'Lord of the Eyrie', ' Fusce gravida sem id hendrerit varius. Vivamus in quam vel nisl ornare imperdiet. Cras ut libero auctor, tristique erat ac, pretium ligula. Fusce tincidunt congue rhoncus. Mauris et malesuada diam. Vivamus egestas velit purus, eget ullamcorper quam egest', '65k', 'The Eyrie', 'The Black Fish', 'black.fish@rivers.com', '2018-06-11 02:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
