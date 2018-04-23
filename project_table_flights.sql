
-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `flights`
--

CREATE TABLE `flights` (
  `Id` tinyint(3) NOT NULL,
  `Source location` text NOT NULL,
  `Destination` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Seats available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `flights`
--

INSERT INTO `flights` (`Id`, `Source location`, `Destination`, `Date`, `Time`, `Seats available`) VALUES
(1, 'Madrid', 'Luxemburg', '2017-01-18', '06:30:00', 100),
(2, 'Budapest', 'New York', '2017-01-18', '14:45:00', 60),
(3, 'Bucharest', 'London', '2017-01-18', '18:25:00', 20),
(4, 'London', 'Moscow', '2017-01-18', '15:16:00', 50),
(5, 'Barcelona', 'Berlin', '2017-01-19', '09:00:00', 80);
