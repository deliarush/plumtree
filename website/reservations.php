<!DOCTYPE html>

<html>

  <?php include("includes/head.php"); ?>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

<h1 id="reservations">Reservations</h2>
  <p class="resDescription">Plum Tree is the perfect place for any occasion. From date nights, to birthday parties, to a casual dinner, Plum Tree will undoubtedly
    give you a night to remember.
    <p>
    <p class="resDescription">
    Make a reservation below, providing your contact information, preferred date and time, and size of party. If
    you would like to make a reservation for a party larger than five, please call us at  (607) 256-8212.
    </p>
    <?php include("includes/hours.php"); ?>
<!-- Pseudocode for Reservation form
*TENTATIVE PLAN- this will be a multi-step form*

PART 1: name

if user types in name and clicks submit
  check to see if name is valid
    if name is valid
        proceed to part 2 of form
      if name is not valid
        have user try again

PART 2: date

have user click a date from calendar form
    check to see that date is valid
    if date is valid:
        proceed to part 3: time
    if date is not valid:
        make user try again

PART 3: time
have user type in a preferred time (may do a drop-down menu)
    check to see that time is valid
    if time is valid:
        proceed to part 4: party size
    if date is not valid:
        make user try again

PART 4: party size
have user click a party size (check-list style)
    if party size clicke
        proceed to part 5: confirmation

PART 5: confirmation
bring user to confirmation page
echo back name, date, time, party size
say we will be in touch to confirm reservation
-->






  <?php include("includes/footer.php"); ?>

</body>

</html>
