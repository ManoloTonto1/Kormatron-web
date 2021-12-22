<?php
// file to create a connection to the database
require_once('connectdb.php');

// query which creates the database
//// add query here
$query = "CREATE TABLE `toilet` (
    `id` int(5) NOT NULL,
    `location` int(5) NOT NULL,
    `type` int(1) NOT NULL,
    `button_count` int(10) NOT NULL,
    `status` int(1) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `toilet_log`
  --
  
  CREATE TABLE `toilet_log` (
    `toilet_id` int(5) NOT NULL,
    `time` datetime(6) NOT NULL,
    `last_cleaned` varchar(6) DEFAULT NULL,
    `worker_id` int(5) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  
  -- --------------------------------------------------------
  
  --
  -- Table structure for table `user`
  --
  
  CREATE TABLE `user` (
    `id` int(5) NOT NULL,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `pincode` varchar(255) NOT NULL,
    `level` int(2) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  
  --
  -- Indexes for dumped tables
  --
  
  --
  -- Indexes for table `toilet`
  --
  ALTER TABLE `toilet`
    ADD PRIMARY KEY (`id`);
  
  --
  -- Indexes for table `toilet_log`
  --
  ALTER TABLE `toilet_log`
    ADD KEY `toilet_id` (`toilet_id`),
    ADD KEY `worker_id` (`worker_id`);
  
  --
  -- Indexes for table `user`
  --
  ALTER TABLE `user`
    ADD PRIMARY KEY (`id`);
  
  --
  -- AUTO_INCREMENT for dumped tables
  --
  
  --
  -- AUTO_INCREMENT for table `toilet`
  --
  ALTER TABLE `toilet`
    MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
  
  --
  -- AUTO_INCREMENT for table `user`
  --
  ALTER TABLE `user`
    MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
  
  --
  -- Constraints for dumped tables
  --
  
  --
  -- Constraints for table `toilet_log`
  --
  ALTER TABLE `toilet_log`
    ADD CONSTRAINT `toilet_log_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `user` (`id`),
    ADD CONSTRAINT `toilet_log_ibfk_2` FOREIGN KEY (`toilet_id`) REFERENCES `toilet` (`id`);
  COMMIT;
  ";

// execute the query and get the result
$result = mysqli_query($mysqli, $query);

// check if a result was received 
if($result) {
    // result was received and query successfully
    //
    //// add do something code here
    //
    exit;
} else {
    // no result was received
    echo 'Oops something went wrong...';
}
?>