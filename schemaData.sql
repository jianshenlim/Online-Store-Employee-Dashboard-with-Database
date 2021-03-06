SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(34, 'Apparel'),
(42, 'Balloons'),
(41, 'Bouquet'),
(39, 'Cake'),
(37, 'Decorations'),
(33, 'Dresses'),
(38, 'Flowers'),
(36, 'Food'),
(40, 'Footwear'),
(35, 'Headwear'),
(32, 'Rings');

CREATE TABLE `category_product` (
  `category_prod_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category_product` (`category_prod_id`, `category_id`, `product_id`) VALUES
(388, 37, 186),
(389, 42, 186),
(390, 37, 187),
(392, 37, 188),
(395, 37, 189),
(398, 33, 190),
(399, 34, 190),
(400, 35, 190),
(401, 33, 191),
(402, 34, 191),
(403, 33, 192),
(404, 34, 192),
(405, 37, 193),
(406, 38, 193),
(407, 38, 187),
(408, 41, 187),
(409, 38, 188),
(410, 41, 188),
(411, 38, 189),
(412, 41, 189),
(413, 37, 194),
(414, 38, 194),
(415, 34, 195),
(416, 35, 195),
(417, 34, 196),
(418, 35, 196),
(419, 32, 197),
(420, 34, 197),
(421, 32, 198),
(422, 34, 198),
(423, 32, 199),
(424, 34, 199),
(425, 32, 200),
(426, 34, 200),
(427, 34, 201),
(428, 40, 201),
(429, 34, 202),
(430, 40, 202),
(431, 34, 203),
(432, 40, 203),
(433, 34, 204),
(434, 40, 204),
(435, 34, 205),
(436, 35, 205),
(437, 36, 206),
(438, 39, 206),
(439, 36, 207),
(440, 39, 207);

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_fname` varchar(64) NOT NULL,
  `client_sname` varchar(64) NOT NULL,
  `client_addr` text,
  `client_phone` varchar(10) DEFAULT NULL,
  `client_mob` varchar(10) DEFAULT NULL,
  `client_email` varchar(256) DEFAULT NULL,
  `subscribed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `client` (`client_id`, `client_fname`, `client_sname`, `client_addr`, `client_phone`, `client_mob`, `client_email`, `subscribed`) VALUES
(1, 'Shelby', 'Bishop', '6117 Duis Avenue', '0489652472', '0432593551', 'Shelby@gmail.com', 1),
(2, 'Thomas', 'Stein', 'Ap #704-7324 Proin Street', '0434912546', '0438826819', 'thomas@gmail.com', 1),
(3, 'Zane', 'Pittman', 'Ap #634-4411 Lorem. St.', '0417179553', '0451161213', 'zane@yahoo.com', 1),
(4, 'Emmanuel', 'Stewart', '838-2171 Nec St.', '0446024033', '0445458581', 'stewem@hotmail.com', 0),
(5, 'Noah', 'Frye', 'P.O. Box 114, 8325 Dui. Rd.', '0450948679', '0414596250', 'noahfrye@monash.edu', 1),
(6, 'Yoshi', 'Fischer', 'Ap #634-4853 Orci Avenue', '0437691109', '0469892719', 'yosh@gmail.com', 0),
(7, 'Carl', 'Ayers', '9933 Lacinia Av.', '0479479730', '0494205806', 'carlla@live.com', 0),
(8, 'Chanda', 'Simon', 'Ap #498-2688 Nullam Street', '0421271165', '0414311784', 'chan.d@hotmail.com', 0),
(9, 'Hedy', 'Clayton', '310-1066 Ac Rd.', '0474654612', '0411353433', 'hedyclay@gmail.com', 1),
(10, 'Bernard', 'Nunez', 'P.O. Box 219, 6945 Augue St.', '0411969633', '0467179124', 'nunezb@hotmail.com', 1),
(11, 'Kevin', 'Kinney', 'P.O. Box 988, 3949 Mollis Ave', '0407789825', '0448455392', 'kinn@hotmail.com', 1),
(12, 'Whitney', 'Johnston', '7799 Arcu. Ave', '0452606578', '0455612311', 'est@Uttincidunt.ca', 1),
(13, 'Melissa', 'Kirkland', '7409 Elit. Rd.', '0420929477', '0492973763', 'melkirk@gmail.com', 0),
(14, 'Hollee', 'Duncan', 'Ap #306-9156 Blandit St.', '0414065151', '0459549001', 'hollee@gmail.com', 0),
(15, 'Shad', 'Terry', 'Ap #404-5460 Eros St.', '0453681260', '0430985441', 'tshad@yahoo.com', 1),
(16, 'Faith', 'Short', 'P.O. Box 675, 503 Adipiscing St.', '0482486655', '0453203784', 'risus@vitaealiquetnec.org', 0),
(17, 'Kirestin', 'Banks', '972-2650 Nec Road', '0413317028', '0409395457', 'kirest.banks@hotmail.com', 0),
(18, 'Christen', 'Maddox', '645-9569 Dictum. Road', '0483613392', '0403689529', 'Sed.molestie@enim.ca', 1),
(19, 'Jay', 'Fulton', 'P.O. Box 490, 5573 Nulla St.', '0463812466', '0440344956', 'jayfult@gmail.com', 1),
(20, 'Kirestin', 'Goff', '849-2489 Orci. Street', '0449929708', '0442619219', 'kirestingoff@gmail.com', 1);

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `purchase_price` decimal(9,2) NOT NULL,
  `sale_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`product_id`, `product_name`, `purchase_price`, `sale_price`) VALUES
(186, 'Red Balloons', '5.00', '30.00'),
(187, 'Mixed Bouquet', '10.00', '45.00'),
(188, 'White Bouquet', '5.00', '25.00'),
(189, 'Yellow Bouquet', '5.00', '25.00'),
(190, 'White Dress with veil', '650.00', '3500.00'),
(191, 'White Dress with Long Hem', '600.00', '3000.00'),
(192, 'White dress with short sleeve', '550.00', '2800.00'),
(193, 'Flower Box', '5.00', '20.00'),
(194, 'Display Flowers Yellow', '10.00', '40.00'),
(195, 'Hair Adornment', '20.00', '60.00'),
(196, 'Tiara Wide', '350.00', '800.00'),
(197, 'Bronze Ring', '200.00', '450.00'),
(198, 'Diamond Ring', '500.00', '2000.00'),
(199, 'Gold Ring', '450.00', '1600.00'),
(200, 'Silver Ring', '250.00', '500.00'),
(201, 'Shoes Cream', '150.00', '300.00'),
(202, 'Shoes Purple', '200.00', '400.00'),
(203, 'Shoes Thin', '220.00', '600.00'),
(204, 'Shoes White', '200.00', '350.00'),
(205, 'Tiara large', '400.00', '850.00'),
(206, 'Cake Flat', '150.00', '200.00'),
(207, 'Cake Tall', '200.00', '350.00');

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image_filename` varchar(4096) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product_image` (`product_image_id`, `product_id`, `product_image_filename`) VALUES
(89, 186, 'balloons.jpg'),
(90, 188, 'bouquetWhite.jpg'),
(91, 187, 'bouquetMixed.jpg'),
(92, 189, 'bouquetYellow.jpg'),
(93, 190, 'dressFull.jpg'),
(94, 191, 'dressLong1.jpg'),
(95, 191, 'dressLong2.jpg'),
(96, 191, 'dressLong3.jpg'),
(97, 192, 'dressShort1.jpg'),
(98, 192, 'dressShort2.jpg'),
(99, 193, 'flowerBox.jpg'),
(100, 194, 'flowerDisplayYellow.jpg'),
(101, 195, 'hairAdornment.jpg'),
(102, 196, 'tiaraWide.jpg'),
(103, 198, 'ringsDiamond.jpg'),
(104, 199, 'ringsGold.jpg'),
(105, 200, 'ringsSilver.jpg'),
(106, 197, 'ringsBronze.jpg'),
(107, 201, 'shoesCream.jpg'),
(108, 202, 'shoesPurple.jpg'),
(109, 203, 'shoesThin.jpg'),
(110, 204, 'shoesWhite.jpg'),
(111, 205, 'tiara.jpg'),
(112, 206, 'weddingCakeFlat.jpg'),
(113, 207, 'weddingCakeTall.jpg');

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `project_name` varchar(256) NOT NULL,
  `project_desc` text NOT NULL,
  `project_addr` text NOT NULL,
  `project_quote` decimal(9,2) NOT NULL,
  `project_other_info` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `project` (`project_id`, `client_id`, `project_name`, `project_desc`, `project_addr`, `project_quote`, `project_other_info`) VALUES
(11, 15, 'Shad and Jen\'s Wedding', 'Small reception wedding service with 3 course meal', '4999 Robinson Court', '4532.00', '50 guests overall.\r\nA 3 course meal is provided by external company'),
(12, 12, 'Whitney and Jason\'s Wedding Anniversary', '60th Wedding Anniversary', '860 Robert Court', '2500.00', '30 guests, hosts would like a balloon arch and 1960s music'),
(13, 16, 'Faith and John\'s Wedding', 'Large-scale wedding at large banquet hall', '958 Parre Avenue', '16000.00', '150 guests, 5 course meal. Music to be presented by friend\'s band (already organised)'),
(14, 8, 'Chanda and Marcie\'s Wedding', 'Small house wedding', '193A Robbinson Road', '985.00', '20 guests, balloons and fog machine'),
(15, 19, 'J&J\'s 5th Wedding Anniversary', 'Medium-scale wedding anniversary celebration at a reception', '958 Riverside Avenue', '8500.00', '80 guests, 3 course meal'),
(16, 2, 'Thomas and Shan\'s Wedding', 'Medium-scale wedding at a reception', '910 Pulip Court', '9500.00', '70 guests and a 3 course meal. Client would like lots of dancing breaks and entertainment in-between food'),
(17, 11, 'K + J\'s Wedding', 'Medium-scale wedding at a reception', '960 Rovanold Court', '9230.00', '65 guests, 3 course meal, hire comedian '),
(18, 15, 'Shad and Jen\'s 1st Wedding Anniversary', 'Small-scale anniversary at reception', '860 Robert Court', '2000.00', '35 guests, 3 course meal'),
(19, 14, 'Hollee and Tee\'s Wedding', 'Large-scale wedding at large banquet hall', '701 Anvil Road', '14000.00', '135 guests, 4 course meal. Pop music during breaks and karaoke during food'),
(20, 9, 'Hedy and Liam\'s Wedding', 'Waterfront reception for medium sized wedding', '927 Margaret Crescent', '11000.00', '70 guests, 3 course meal, LED wall lights'),
(21, 6, 'Yoshi and Lan\'s Wedding', 'Medium-scale wedding at a reception', '958 Riverside Avenue', '8900.00', '30 international guests and 30 local guests. English and Chinese presenters and subtitles. Chinese-style food banquet'),
(22, 13, 'Mel and Shan\'s Wedding', 'Small reception wedding service', '4999 Robinson Court', '5000.00', '45 guests, 3 course meal. Melissa would like us to find her a bridal stylist.'),
(23, 10, 'Bernard and Jaime\'s 15th Wedding Anniversary', 'Medium-scale wedding at a reception', '810 Manly Road', '7500.00', '75 guests. Balloon arch and 3 course meal'),
(24, 14, 'Hollee and Tee\'s 1st Anniversary', 'Medium-scale reception', '810 Manly Road', '9500.00', '65 guests, balloon arch and cake'),
(25, 4, 'Emmanuel and Lisa\'s Wedding', 'Medium-scale wedding at a reception', '810 Manly Road', '8300.00', '70 guests, 3 course meal. \r\nLive piano concert '),
(26, 7, 'Carl and Addison\'s Wedding', 'Large-scale wedding at large banquet hall', '701 Anvil Road', '32000.00', '200 guests, 5 course meal. \r\nRequired: stylist, make-up artist, live music and comedy performance'),
(27, 3, 'Zane and Mel\'s Wedding', 'Medium-scale wedding at State Library', 'Isabella Fraser Room, 328 Swanston Street', '120000.00', '60 guests, 4 course meal. Soft ambient music, balloon arch. White and gold themed decor and cutlery'),
(28, 18, 'CC Wedding', 'Medium-scale wedding at a reception', '910 Pulip Court', '9000.00', '65 guests, 3 course meal. '),
(29, 4, 'Emmanuel and Lisa\'s Wedding Anniversary', 'Medium-scale wedding at a reception', '927 Margaret Crescent', '16550.00', '65 guests, 5 course 5-star meal'),
(30, 6, 'Yoshi and Lan\'s Wedding Anniversary', 'Large-scale wedding at large banquet hall', '958 Parre Avenue', '22000.00', '85 guests, Chinese themed celebration with food, dance acts and music');

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(19, 'jack', '31611159e7e6ff7843ea4627745e89225fc866621cfcfdbd40871af4413747cc');


ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_prod_id`),
  ADD KEY `category_fk` (`category_id`),
  ADD KEY `product_fk` (`product_id`);

ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_image_fk` (`product_id`);

ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `client_fk` (`client_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

ALTER TABLE `category_product`
  MODIFY `category_prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


ALTER TABLE `category_product`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

ALTER TABLE `project`
  ADD CONSTRAINT `client_fk` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);
