<?php

/*
 * The MIT License
 *
 * Copyright 2019 Mateusz Żółtak.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace zozlak;

/**
 * Just a container for RDF and XSD related constants
 *
 * @author zozlak
 */
class RdfConstants {

    const RDF_TYPE          = 'http://www.w3.org/1999/02/22-rdf-syntax-ns#type';
    const XSD_STRING        = 'http://www.w3.org/2001/XMLSchema#string';
    const XSD_BOOLEAN       = 'http://www.w3.org/2001/XMLSchema#boolean';
    const XSD_DECIMAL       = 'http://www.w3.org/2001/XMLSchema#decimal';
    const XSD_FLOAT         = 'http://www.w3.org/2001/XMLSchema#float';
    const XSD_DOUBLE        = 'http://www.w3.org/2001/XMLSchema#double';
    const XSD_DURATION      = 'http://www.w3.org/2001/XMLSchema#duration';
    const XSD_DATE_TIME     = 'http://www.w3.org/2001/XMLSchema#dateTime';
    const XSD_TIME          = 'http://www.w3.org/2001/XMLSchema#time';
    const XSD_DATE          = 'http://www.w3.org/2001/XMLSchema#date';
    const XSD_HEX_BINARY    = 'http://www.w3.org/2001/XMLSchema#hexBinary';
    const XSD_BASE64_BINARY = 'http://www.w3.org/2001/XMLSchema#base64Binary';
    const XSD_ANY_URI       = 'http://www.w3.org/2001/XMLSchema#anyURI';
    const XSD_QNAME         = 'http://www.w3.org/2001/XMLSchema#QName';
    const XSD_NOTATION      = 'http://www.w3.org/2001/XMLSchema#NOTATION';

}
