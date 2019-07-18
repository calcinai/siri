<?php

namespace Calcinai\Siri;

/**
 * Class representing ArrivalPlatformName
 *
 * Bay or platform name. Inheritable property. Can be omitted if the same as the DeparturePlatformName If there no arrival platform name separate from the departure platform name, the precedence is (i) any arrival platform on any related dated timetable element, (ii) any departure platform name on this estimated element; (iii) any departure platform name on any related dated timetable call.
 */
class ArrivalPlatformName extends NaturalLanguageStringStructureType
{


}

