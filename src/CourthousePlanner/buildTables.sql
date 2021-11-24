CREATE TABLE IF NOT EXISTS CourtRoom(
	room_id INTEGER NOT NULL AUTO_INCREMENT,
	district VARCHAR,
	court_name VARCHAR,
	room_num INTEGER,
	PRIMARY KEY(room_id)
);
CREATE TABLE IF NOT EXISTS Person(
	pid INTEGER NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(64),
	last_name VARCHAR(64),
	birth_date DATE,
	phone_number CHAR(10),
	is_lawyer BOOLEAN,
	is_judge BOOLEAN,
	PRIMARY KEY(pid)
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
	FOREIGN KEY(def_att_id) REFERENCES Person(pid),
	FOREIGN KEY(pros_id) REFERENCES Person(pid),
	FOREIGN KEY(jid) REFERENCES Person(pid),
	CHECK (def_att_id <> pros_id)
);
CREATE TABLE IF NOT EXISTS CrimeDict(
	penal_code INTEGER NOT NULL,
	law_desc VARCHAR,
	crime_type INTEGER,
	PRIMARY KEY(penal_code)
);
CREATE TABLE IF NOT EXISTS Charges
	case_id INTEGER NOT NULL AUTO_INCREMENT,
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
