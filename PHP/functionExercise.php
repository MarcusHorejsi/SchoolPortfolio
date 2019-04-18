<?php
    function greater($num1 = 0, $num2 = 0)
    {
        if ($num1>$num2) {
            echo $num1." is greater than ".$num2."<br />";
        }
        else if ($num1<$num2) {
            echo $num2." is greater than ".$num1."<br />";
        }
        else if ($num1==$num2) {
            echo $num1." is equal to ".$num2."<br />";
        }
    }
    greater(5,9);
    greater(19,2);
    greater(10,10);

    echo "<br /><hr /><br />";

    function birth($month = 0, $day = 0)
    {
        if ($month == 1) {
            if ($day < 21) {
                echo "You are Capricon<br />";
                $signs = "Capricon";
                return $signs;
            }
            else {
                echo "You are Aquarius<br />";
                $signs = "Aquarius";
                return $signs;
            }
        }
        else if ($month == 2) {
            if ($day < 20) {
                echo "You are Aquarius<br />";
                $signs = "Aquarius";
                return $signs;
            }
            else {
                echo "You are Pisces<br />";
                $signs = "Pisces";
                return $signs;
            }
        }
        else if ($month == 3) {
            if ($day < 21) {
                echo "You are Pisces<br />";
                $signs = "Pisces";
                return $signs;
            }
            else {
                echo "You are Aries<br />";
                $signs = "Aries";
                return $signs;
            }
        }
        else if ($month == 4) {
            if ($day < 20) {
                echo "You are Aries<br />";
                $signs = "Aries";
                return $signs;
            }
            else {
                echo "You are Taurus<br />";
                $signs = "Taurus";
                return $signs;
            }
        }
        else if ($month == 5) {
            if ($day < 21) {
                echo "You are Taurus<br />";
                $signs = "Taurus";
                return $signs;
            }
            else {
                echo "You are Gemini<br />";
                $signs = "Gemini";
                return $signs;
            }
        }
        else if ($month == 6) {
            if ($day < 22) {
                echo "You are Gemini<br />";
                $signs = "Gemini";
                return $signs;
            }
            else {
                echo "You are Cancer<br />";
                $signs = "Cancer";
                return $signs;
            }
        }
        else if ($month == 7) {
            if ($day < 24) {
                echo "You are Cancer<br />";
                $signs = "Cancer";
                return $signs;
            }
            else {
                echo "You are Leo<br />";
                $signs = "Leo";
                return $signs;
            }
        }
        else if ($month == 8) {
            if ($day < 24) {
                echo "You are Leo<br />";
                $signs = "Leo";
                return $signs;
            }
            else {
                echo "You are Virgo<br />";
                $signs = "Virgo";
                return $signs;
            }
        }
        else if ($month == 9) {
            if ($day < 23) {
                echo "You are Virgo<br />";
                $signs = "Virgo";
                return $signs;
            }
            else {
                echo "You are Libra<br />";
                $signs = "Libra";
                return $signs;
            }
        }
        else if ($month == 10) {
            if ($day < 23) {
                echo "You are Libra<br />";
                $signs = "Libra";
                return $signs;
            }
            else {
                echo "You are Scorpia<br />";
                $signs = "Scorpio";
                return $signs;
            }
        }
        else if ($month == 11) {
            if ($day < 23) {
                echo "You are Scorpia<br />";
                $signs = "Scorpio";
                return $signs;
            }
            else {
                echo "You are Sagitarius<br />";
                $signs = "Sagitarius";
                return $signs;
            }
        }
        else if ($month == 12) {
            if ($day < 21) {
                echo "You are Sagitarius<br />";
                $signs = "Sagitarius";
                return $signs;
            }
            else {
                echo "You are Capricon<br />";
                $signs = "Capricon";
                return $signs;
            }
        }
    }
    birth(5,9);
    birth(11,2);
    birth(10,10);

    echo "<br /><hr /><br />";

    function signs1($signs) {
        if ($signs == "Capricon") {
            echo "Today is not a great day for major moves. Try to avoid signing any contracts, finalizing any commitments or even making any big purchases. Give it a few more days to settle, and you might find some problems with the deal—or better yet, you might find a better deal elsewhere. Patience pays off for you in more ways than one right now. There's no need to be too hasty, especially if someone is pressuring you to stop wasting their time—it's your time you should be most concerned about.<br /><br />";
        }
        else if ($signs == "Aquarius") {
            echo "Your latest urge to speed up your life might be a bit shortsighted. After all, there's some good stuff on the horizon, and you definitely don't want to miss it. Sure, there's going to be some not-so-good stuff, too, but it's all part of the experience of life. Embrace the balance and ride the tempo of your life the way it is—slow and purposeful. Learn to dance according to the music that's being played...your current groove is a good one.<br /><br />";
        }
        else if ($signs == "Pisces") {
            echo "The people you choose to associate with say a lot about who you are, so be aware of the company you keep. If you're growing attached to a person who's relatively new to your life, that connection will grow stronger today—either through a shared experience or a shared interest. To encourage this growth, make all of your conversations with this person sort of investigative. Ask a lot of questions, and you'll learn more about their life and your feelings about them.<br /><br />";
        }
        else if ($signs == "Aries") {
            echo "Gossip can have a life of its own, so don't be surprised if you find out about something shocking that you're (supposedly) involved in today. Take the initiative and do some damage control before things get too far out of hand. The cat's already out of the bag and has since morphed into a strange animal, but you can still reach the people who matter and set the record straight. Your reputation won't suffer—if anything, the extra attention might increase your clout.<br /><br />";
        }
        else if ($signs == "Taurus") {
            echo "This is a day of opposites—what you think is significant is really trivial, and the tiny ideas you are relegating to the back burner are the seeds that could create a critical turning point in your life. You've been given this hand to play, but you need to shuffle those cards and look at everything differently! There's a gem in your possession, but you don't yet realize its value. Talk to people about what you're working on—verbal communication will reveal your treasure.<br /><br />";
        }
        else if ($signs == "Gemini") {
            echo "Sacrifices can be very tricky things: you need to make them consciously, but you never have a guarantee that they'll be worth the effort. They take a major leap of faith and should not be entered into on a whim. Charming personalities might try to get you to take that leap of faith a bit too soon today, so be cautious about any financial, career or romantic opportunities that come your way. Don't turn the sacrifice into your financial security.<br /><br />";
        }
        else if ($signs == "Cancer") {
            echo "Your charm is a powerful force, and many times you've been able to use it to get your way—without letting other people realize what they're giving up. But today you don't need any camouflage for your ideas or desires. Feel free to push your plans forward with all the subtlety of a tap-dancing elephant. Time is of the essence right now, and you don't have enough of it for nuanced discussions. Get in there and force some action. It might not be easy, but it will be worth it!<br /><br />";
        }
        else if ($signs == "Leo") {
            echo "Do you know what you need to add some light into your life right now? A few fresh ideas. So step out of your oh-so-comfortable comfort zone today and put yourself in front of some uncomfortable and unfamiliar philosophies. Explore new cultures, music, and religions, and you'll find a whole new way of thinking. You don't have to adopt any big changes, as that's not the point. The point is to expose yourself to things that are strange, foreign—and invigorating.<br /><br />";
        }
        else if ($signs == "Virgo") {
            echo "If a problem pops up with a friend or associate today, don't turn it into a mountain—see it for the molehill it probably is. This is not the beginning of any sort of trend, so stop worrying about increased tension between the two of you. All in all, your relationships are working well, and you may see an overlap of two of your social circles. This might result in a new love connection, and you may end up being a matchmaker without even trying. Expect some grateful lovebirds.<br /><br />";
        }
        else if ($signs == "Libra") {
            echo "Today you witness some behavior that causes you concern for a friend, but wait a while before bringing anything to their attention. You're on the outside looking in, and you're seeing everything through your own lens. That means the experiences from your past could be adding nuances that aren't accurate. Put your relationship with this person first. You should trust that if they need you to get involved, they'll ask. Now is not the time to push your way in.<br /><br />";
        }
        else if ($signs == "Scorpia") {
            echo "Your ability to not take things personally is something you should rely on heavily today. There are some emotionally charged things going on in your life right now, and you need to stay objective about all of them if you want to prevent a stressful day. If you can keep your sensitivities toned down, you'll see things accurately—apply caution in any conclusions you make, and don't assume that everything always has to be difficult.<br /><br />";
        }
        else if ($signs == "Sagitarius") {
            echo "If you're in an introspective mood today, go with it. Now is an excellent time to take stock of where you are and where you're headed, so your subconscious must be ready to do just that—seek the quieter path. A missed opportunity may be coming back your way in a slightly different guise. Look beneath the surface of an invitation and you'll find the chance you'd thought was gone.<br /><br />";
        }
    }
    signs1(birth(2,9));
    signs1(birth(11,25));
    signs1(birth(3,5));
?>