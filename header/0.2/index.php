<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header - version 0.2</title>
</head>
<body>
    <h1>Header - version 0.2</h1>
    <p>Initially created on <i>Tuesday 15th August 2023</i></p>
    <ul>
        <li><a href="concept-a2.php">Concept A - with cookie banner</a></li>
        <li><a href="explore-the-collection/index.php">Concept A - Explore the collection</a></li>
        <li><a href="record-revealed/index.php">Concept A - Record revealed</a></li>
        <li><a href="story-1/index.php">Concept A - Story example</a></li>
        <li><a href="search/index.php">Concept A - Search</a></li>
        <li><a href="details/index.php">Concept A - Details</a></li>
        <li><a href="current-homepage/index.php">Concept A - Current homepage</a></li>
    </ul>

    <p>These concepts are a progression from version 0.1. They have been put on top of some existing templates just for illustration (Note: the purpose of the above links is focus on the content below of the header bar, but just to see how the heading works if loosely slotted into to some static representations of the pages in their native HTML format rather than in Figma).</p>
    <hr>
    <h2>Masthead and navigation</h2>
    <h3>Top level links</h3>
    <p><b>HTML-only</b>: These could be marked up as anchor links and could link to individual gateway pages for each of the top level items.</p>
    <p><b>If JS-available</b>: The HTML links could then be replaced by buttons using JS which invoke a disclosure pattern. The button should be a show/hide toggle for the secondary links panel which appears below the main masthead area. Within the disclosure panel there will also be a close button to provide users with a clear way to hide the menu as an alternative way to the toggle function of the top level links. When another top-level link is selected, and a secondary link panel is already open, the current panel should disappear and the new panel should open in it's place.</p>
    <p><b>Mobile view</b>: The top level links could be hidden by default and toggled into view using a standard 'hamburger' menu button. Once shown, each of the top level links could open a secondary nested list using a show/hide toggle.</p>
    <video controls width="45%" style="display: inline-block; border: 2px solid black; margin-right: 10px;">
        <source src="media/toggle-menu-desktop-video.mp4" type="video/mp4" />
    </video>
    <video controls width="45%" style="display: inline-block; border: 2px solid black; margin-right: 10px;">
        <source src="media/toggle-menu-mobile-video.mp4" type="video/mp4" />
    </video>

    <h3>Secondary links panel</h3>
    <p><b>HTML-only</b>: This would not exist in the HTML if JS is unavailable.</p>
    <p><b>If JS-available</b>: Each top level link could have a corresponding secondary links panel which opens. It could contain a heading which matches the top level link, a paragraph to explain the purpose of the section and a list of curated links to the key areas within the section (including a duplicate link to the top level gateway page as the first item in the list).</p>
    <p><b>Mobile view</b>: The second level list items could be hidden by default and activated by the top-level toggle buttons. The mobile view would only show a list of secondary links and not the explanatory paragraph that is shown on larger screens.</p>
    <img src="media/secondary-links-panel.png" style="width: 75%; display: inline-block; border: 2px solid black; margin-right: 10px;">
    <hr>
    <h2>Phase banner</h2>
    <p>This would remain the same as the current phase banner with slightly different styling. We may want to explore the feasibility of <a href="../0.3/index.php">v0.3</a> and the use of a disclosure pattern at a later date.</p>
    <hr>
    <h2>Cookie banner</h2>
    <p>This would remain the same as the current cookie message and the new styling could be implemented as a separate piece of work.</p>
</body>
</html>
