LOAD DATA INFILE 'CycleLockers.csv' 
  INTO TABLE cycle_lockers 
  FIELDS TERMINATED BY ',' ENCLOSED BY '"'
  LINES TERMINATED BY '\r\n'
  IGNORE 1 LINES
  (location, @dummy, @dummy, @dummy, @dummy, @dummy, longitude, latitude);
