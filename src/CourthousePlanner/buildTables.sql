CREATE TABLE IF NOT EXISTS Address(
	address_id INTEGER NOT NULL AUTO_INCREMENT,
	street_num INTEGER,
	street_name VARCHAR,
	zip INTEGER,
	city VARCHAR,
	state VARCHAR,
	PRIMARY KEY(address_id)
);
CREATE TABLE IF NOT EXISTS CourtRoom(
	room_id INTEGER NOT NULL AUTO_INCREMENT,
	address_id INTEGER NOT NULL,
	district VARCHAR,
	court_name VARCHAR,
	room_num INTEGER,
	PRIMARY KEY(room_id),
	FOREIGN KEY(address_id) REFERENCES Address(address_id)
);
CREATE TABLE IF NOT EXISTS Person(
	pid INTEGER NOT NULL AUTO_INCREMENT,
	first_name VARCHAR,
	last_name VARCHAR,
	birth_date DATE,
	phone_number CHAR(10), CHECKME
	address_id INTEGER,
	PRIMARY KEY(pid),
	FOREIGN KEY(address_id) REFERENCES Address(address_id)
);
CREATE TABLE IF NOT EXISTS Attorney(
	pid INTEGER NOT NULL,
	bar_id INTEGER NOT NULL,
	PRIMARY KEY(pid)
	FOREIGN KEY(pid) REFERENCES Person(pid)
);
CREATE TABLE IF NOT EXISTS Judge(
	pid INTEGER NOT NULL,
	PRIMARY KEY(pid)
	FOREIGN KEY(pid) REFERENCES Person(pid)
);
CREATE TABLE IF NOT EXISTS CourtCase(
	case_id INTEGER NOT NULL AUTO_INCREMENT,
	case_div INTEGER NOT NULL,
	def_id INTEGER NOT NULL,
	def_att_id INTEGER NOT NULL,
	pros_id INTEGER NOT NULL,
	jid INTEGER NOT NULL,
	PRIMARY KEY(case_id),
	FOREIGN KEY(def_id) REFERENCES Person(pid),
	FOREIGN KEY(def_att_id) REFERENCES Attorney(pid),
	FOREIGN KEY(pros_id) REFERENCES Attorney(pid),
	FOREIGN KEY(jid) REFERENCES Judge(pid),
	CHECK (def_att_id <> pros_id)
);
CREATE TABLE IF NOT EXISTS CrimeDict(
	penal_code INTEGER NOT NULL,
	law_desc VARCHAR,
	crime_type INTEGER,
	PRIMARY KEY(penal_code)
);
CREATE TABLE IF NOT EXISTS Charges
	case_id INTEGER NOT NULL,
	penal_code INTEGER NOT NULL,
	charged BOOLEAN,
	PRIMARY KEY(case_id, penal_code),
	FOREIGN KEY(case_id) REFERENCES CourtCase(case_id),
	FOREIGN KEY(penal_code) REFERENCES CrimeDict(penal_code)
);
CREATE TABLE IF NOT EXISTS Appointment(
	apt_id INTEGER NOT NULL AUTO_INCREMENT,
	case_id INTEGER NOT NULL,
	room_id INTEGER NOT NULL,
	filing_fee REAL,
	crime_code INTEGER,
	PRIMARY KEY(apt_id),
	FOREIGN KEY(case_id) REFERENCES CourtCase(case_id),
	FOREIGN KEY(room_id) REFERENCES CourtRoom(room_id)
);
