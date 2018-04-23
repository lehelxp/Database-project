
-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `booking`
--

CREATE TABLE `booking` (
  `Flight Id` int(3) NOT NULL,
  `Username` int(11) NOT NULL,
  `Ticket purchased` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
